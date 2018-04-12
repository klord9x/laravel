<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 4/10/2018
 * Time: 1:20 PM
 */

namespace App\Handlers;

use App\Http\Services\Bridge\AbstractWebService as BaseHandler;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;

class PaymentHandler extends BaseHandler
{
    //Define error code:
    const ERROR_AGENT_FAIL = 0;
    const ERROR_SIGN_FAIL = -100;
    const ERROR_USER_INCORRECT = -1;
    const ERROR_EMAIL_INCORRECT = -2;
    const ERROR_SERIAL_INCORRECT = -3;
    const ERROR_PIN_INCORRECT = -4;
    const ERROR_CARD_TYPE_INCORRECT = -5;
    const ERROR_VALUE_UPDATE_INCORRECT = -6;
    const ERROR_REQUEST_UPDATE_INCORRECT = -7;
    const ERROR_USER_NOT_EXIST = -8;
    const ERROR_ACCOUNT_BALANCE_NOT_ENOUGH = -9;
    const ERROR_CODE_INCORRECT = -10;
    const ERROR_DENOMINATION_INCORRECT = -11;
    const ERROR_TRADE_CODE_INCORRECT = -12;
    const ERROR_TRADE_CODE_CARD_INCORRECT = -13;
    const ERROR_SYSTEM = -14;
    const ERROR_TRADE_NOT_FOUND = -15;
    const ERROR_PAY_CARD_FAIL = 100;
    const ERROR_SYSTEM_V2 = -101;
    const ERROR_PIN_INCORRECT_V2 = -107;
    const ERROR_SERIAL_INCORRECT_V2 = -108;
    const ERROR_CARD_INFO_INCORRECT_FORMAT = -124;
    const ERROR_CARD_INFO_INCORRECT = -104;
    const ERROR_PAY_CARD_OVER_FIVE_TIME = -105;
    const ERROR_PAY_CARD_CHANNEL_OVERLOAD = -109;
    const ERROR_CARD_LOCKED = -102;
    const ERROR_CARD_EXPIRED = -103;
    const ERROR_CARD_USED_OR_NOT_EXIST = 50;
    const ERROR_SERIAL_INCORRECT_V3 = 51;
    const ERROR_CARD_INFO_FAIL = 52;
    const ERROR_CARD_INFO_FAIL_V2 = 53;
    const ERROR_CARD_LOCKED_24H = 55;
    const ERROR_CARD_NOT_ACTIVE = 59;
    const ERROR_SYSTEM_CARD_CHANNEL_BUSY = 70;
    const ERROR_SYSTEM_CARD_CHANNEL_NOT_SUPPORT = 97;
    const ERROR_SYSTEM_CARD_CHANNEL_CLOSE_TEMP = 98;
    const ERROR_TRADE_PENDING = 99;
    const SUCCESS_PAY = 1;

    const CARD_TYPE_VIETTEL = 'VTT';
    const CARD_TYPE_VINAPHONE = 'VNP';
    const CARD_TYPE_MOBIPHONE = 'VMS';

    const BALANCE_ACTION_PLUS = 1;
    const BALANCE_ACTION_SUB = -1;

    const CARD_STATUS_SUCCESS = 1;

    //Payment URI:
    const URI_CHARGE_PLUS = '/payment/chargecardinwallet';
    const URI_CHARGE_NOT_PLUS = '/payment/chargecardreturnvalue';
    const URI_CHARGE_UPDATE = '/payment/updatechargecard';
    const URI_BALANCE_GET = '/payment/getbalance';
    const URI_BALANCE_UPDATE = '/payment/updatebalance';
    protected $domain = 'http://dev.pm.100d.mobi';

    /**
     * send charge with plus wallet
     * @param Request $request
     * @return mixed|null
     */
    public function chargePlus(Request $request)
    {
        /* Set your parameters for the request */
        $this->username = $request->username;
        $this->email = $request->email;
        //Cheat code for getSign :)
        $this->password = $request->cardSerial;
        $params = array(
            'agent' => $this->agent,
            'key'   => $this->key,
            'username'     => $request->username,
            'email'       => $request->email,
            'cardCode'       => $request->cardCode,
            'cardSerial'       => $request->cardSerial,
            'cardType'       => $request->cardType,
            'sign'       => $this->getSign(),
        );

        return $this->send(self::URI_CHARGE_PLUS, $params);
    }

    /**
     * send charge without plus wallet
     * @param Request $request
     * @return mixed|null
     */
    public function chargeNotPlus(Request $request)
    {
        /* Set your parameters for the request */
        $this->username = $request->username;
        $this->email = $request->email;
        //Cheat code for getSign :)
        $this->password = $request->cardSerial;
        $params = array(
            'agent' => $this->agent,
            'key'   => $this->key,
            'username'     => $this->username,
            'email'       => $this->email,
            'cardCode'       => $request->cardCode,
            'cardSerial'       => $request->cardSerial,
            'cardType'       => $request->cardType,
            'sign'       => $this->getSign(),
        );

        return $this->send(self::URI_CHARGE_NOT_PLUS, $params);
    }


    /**
     * update balance account.
     * @param Request $request
     * @return mixed|null
     */
    public function updateBalance(Request $request)
    {
        /* Set your parameters for the request */
        $this->username = $request->username;
        $this->email = $request->email;
        //Cheat code for getSign :)
        $this->password = null;
        $params = array(
            'agent' => $this->agent,
            'key'   => $this->key,
            'username'     => $this->username,
            'gold'       => $request->gold,
            'action'       => $request->action,
            'sign'       => $this->getSign(),
        );

        return $this->send(self::URI_BALANCE_UPDATE, $params);
    }


    /**
     * update charge info.
     * @param Request $request
     * @return mixed|null
     */
    public function updateCharge(Request $request)
    {
        /* Set your parameters for the request */
        // Cheat code for getSign();
        $this->username = $request->transactionID;
        $this->password = $request->cardSerial;
        $params = array(
            'agent' => $this->agent,
            'key'   => $this->key,
            'transactionID'     => $this->username,
            'cardCode'       => $request->cardCode,
            'cardSerial'       => $request->cardSerial,
            'sign'       => $this->getSign(),
            'cardStatus'       => $request->cardStatus,
            'cardAmount'       => $request->cardAmount,
            'cardMessage'       => $request->cardMessage,
//            'cardTransaction'       => $request->cardTransaction,
        );

        return $this->send(self::URI_CHARGE_UPDATE, $params);
    }

    /**
     * get balance info.
     * @param Request $request
     * @return mixed|null
     */
    public function getBalance(Request $request)
    {
        /* Set your parameters for the request */
        // Cheat code for getSign();
        $this->username = $request->username;
        $this->password = null;
        $params = array(
            'agent' => $this->agent,
            'key'   => $this->key,
            'username'     => $this->username,
            'sign'       => $this->getSign(),
        );

        return $this->send(self::URI_BALANCE_GET, $params);
    }

    /**
     * get response from api payment.
     * @param string $uri
     * @param array $params
     * @param string $method
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function send(string $uri, array $params, $method = 'GET')
    {

        $result = null;
        $client = new Client(['base_uri' => $this->domain]);
        try {
            $response = $client->request($method, $uri, [
                'query' => $params
            ]);

            if (!empty($response)) {
                $result = json_decode($response->getBody(), true);
            }

        } catch (GuzzleException $e) {

        }

        return $result;
    }

    /**
     * get messages error
     * @return array
     */
    public function messages()
    {
        return [
            self::ERROR_AGENT_FAIL => ['agent' => 'Thông tin đại lý không đúng'],
            self::ERROR_SIGN_FAIL => ['sign' => 'Chữ ký không đúng'],
            self::ERROR_USER_INCORRECT => ['username' => 'Tên đăng nhập không hợp lệ'],
            self::ERROR_EMAIL_INCORRECT => ['email' =>'Email không hợp lệ'],
            self::ERROR_SERIAL_INCORRECT => ['serial' =>'Số serial không hợp lệ'],
            self::ERROR_SERIAL_INCORRECT_V2 => ['serial' =>'Số serial không hợp lệ'],
            self::ERROR_SERIAL_INCORRECT_V3 => ['serial' =>'Số serial không hợp lệ'],
            self::ERROR_PIN_INCORRECT => ['pin' => 'Mã pin không hợp lệ'],
            self::ERROR_PIN_INCORRECT_V2 => ['pin' => 'Mã pin không hợp lệ'],
            self::ERROR_CARD_TYPE_INCORRECT => ['card_type' => 'Loại thẻ không hợp lệ'],
            self::ERROR_VALUE_UPDATE_INCORRECT => ['value' => 'Giá trị cập nhật không hợp lệ'],
            self::ERROR_REQUEST_UPDATE_INCORRECT => ['request' => 'Yêu cầu cập nhật không hợp lệ'],
            self::ERROR_ACCOUNT_BALANCE_NOT_ENOUGH => ['acc_balance' => 'Số dư không đủ để thực hiện giao dịch'],
            self::ERROR_CODE_INCORRECT => ['code' => 'Mã lỗi không hợp lệ'],
            self::ERROR_DENOMINATION_INCORRECT => ['denomination' => 'Mệnh giá không hợp lệ'],
            self::ERROR_TRADE_CODE_INCORRECT => ['trade_code' => 'Mã giao dịch không hợp lệ'],
            self::ERROR_TRADE_CODE_CARD_INCORRECT => ['trade_code_card' => 'Mã giao dịch của thẻ không hợp lệ'],
            self::ERROR_TRADE_NOT_FOUND => ['trade' => 'Không tìm thấy giao dịch'],
            self::ERROR_PAY_CARD_FAIL => ['trade' => 'Nạp thẻ thất bại'],
            self::ERROR_SYSTEM => ['error' => 'Lỗi hệ thống'],
            self::ERROR_SYSTEM_V2 => ['error' => 'Lỗi hệ thống'],
            self::ERROR_CARD_INFO_INCORRECT_FORMAT => ['serial' => 'Thông tin thẻ không đúng định dạng'],
            self::ERROR_USER_NOT_EXIST => ['username' => 'Username không tồn tại'],
            self::ERROR_CARD_INFO_INCORRECT => ['serial' => 'Thông tin thẻ không hợp lệ'],
            self::ERROR_CARD_INFO_FAIL => ['serial' => 'Thông tin thẻ không đúng'],
            self::ERROR_CARD_INFO_FAIL_V2 => ['serial' => 'Thông tin thẻ không đúng'],
            self::ERROR_PAY_CARD_OVER_FIVE_TIME => ['serial' => 'Nhập sai mã thẻ quá 5 lần'],
            self::ERROR_PAY_CARD_CHANNEL_OVERLOAD => ['channel' => 'Kênh nạp thẻ quá tải'],
            self::ERROR_CARD_LOCKED => ['card' => 'Thẻ bị khóa bởi nhà mạng'],
            self::ERROR_CARD_EXPIRED => ['card' => 'Thẻ quá thời hạn sử dụng'],
            self::ERROR_CARD_USED_OR_NOT_EXIST => ['card' => 'Thẻ đã sử dụng hoặc không tồn tại'],
            self::ERROR_CARD_LOCKED_24H => ['card' => 'Thẻ đã bị khóa 24h'],
            self::ERROR_CARD_NOT_ACTIVE => ['card' => 'Thẻ chưa được kích hoạt'],
            self::ERROR_SYSTEM_CARD_CHANNEL_BUSY => ['system' => 'Hệ thống kênh thẻ đang bận'],
            self::ERROR_SYSTEM_CARD_CHANNEL_NOT_SUPPORT => ['system' => 'Hệ thống kênh thẻ không hỗ trợ loại thẻ này'],
            self::ERROR_SYSTEM_CARD_CHANNEL_CLOSE_TEMP => ['system' => 'Hệ thống kênh thẻ đang tạm đóng'],
            self::ERROR_TRADE_PENDING => ['trade' => 'Giao dịch đang chờ xử lý'],
            self::SUCCESS_PAY => ['success' => 'Giao dịch thành công'],
        ];
    }
}
