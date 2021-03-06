<?php
namespace ElasticEmailApi
{
    class AccessToken extends \ElasticEmailClient\ElasticRequest
{
    public function __construct(\ElasticEmailClient\ApiConfiguration $apiConfiguration)
    {
        parent::__construct($apiConfiguration);
    }
    /**
     * Add new AccessToken
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $tokenName 
     * @param \ElasticEmailEnums\AccessLevel $accessLevel 
     * @return string
     */
    public function Add($tokenName, $accessLevel) {
        return $this->sendRequest('accesstoken/add', array(
                    'tokenName' => $tokenName,
                    'accessLevel' => $accessLevel
        ));
    }

    /**
     * Permanently delete AccessToken.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $tokenName 
     */
    public function EEDelete($tokenName) {
        return $this->sendRequest('accesstoken/delete', array(
                    'tokenName' => $tokenName
        ));
    }

    /**
     * Get AccessToken list.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @return Array<\ElasticEmailEnums\AccessToken>
     */
    public function EEList() {
        return $this->sendRequest('accesstoken/list');
    }

    /**
     * Edit AccessToken.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $tokenName 
     * @param \ElasticEmailEnums\AccessLevel $accessLevel 
     * @param string $tokenNameNew 
     */
    public function Update($tokenName, $accessLevel, $tokenNameNew = null) {
        return $this->sendRequest('accesstoken/update', array(
                    'tokenName' => $tokenName,
                    'accessLevel' => $accessLevel,
                    'tokenNameNew' => $tokenNameNew
        ));
    }

}
}
?>