<?php
/**
 * CharityApi
 * PHP version 7.4
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl/about  Documentation is generated from [this](https://developer.allegro.pl/swagger.yaml) OpenAPI 3.0 specification file.
 *
 * The version of the OpenAPI document: latest
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AllegroApi\Client;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use AllegroApi\ApiException;
use AllegroApi\Configuration;
use AllegroApi\HeaderSelector;
use AllegroApi\ObjectSerializer;

/**
 * CharityApi Class Doc Comment
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CharityApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'searchFundraisingCampaigns' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation searchFundraisingCampaigns
     *
     * Search fundraising campaigns
     *
     * @param  int $limit Maximum number of returned results. (required)
     * @param  string $phrase Fundraising campaign name or it&#39;s Organization name prefix to search for. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchFundraisingCampaigns'] to see the possible values for this operation
     *
     * @throws \AllegroApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \AllegroApi\Model\FundraisingCampaigns
     */
    public function searchFundraisingCampaigns($limit, $phrase, string $contentType = self::contentTypes['searchFundraisingCampaigns'][0])
    {
        list($response) = $this->searchFundraisingCampaignsWithHttpInfo($limit, $phrase, $contentType);
        return $response;
    }

    /**
     * Operation searchFundraisingCampaignsWithHttpInfo
     *
     * Search fundraising campaigns
     *
     * @param  int $limit Maximum number of returned results. (required)
     * @param  string $phrase Fundraising campaign name or it&#39;s Organization name prefix to search for. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchFundraisingCampaigns'] to see the possible values for this operation
     *
     * @throws \AllegroApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \AllegroApi\Model\FundraisingCampaigns, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchFundraisingCampaignsWithHttpInfo($limit, $phrase, string $contentType = self::contentTypes['searchFundraisingCampaigns'][0])
    {
        $request = $this->searchFundraisingCampaignsRequest($limit, $phrase, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\AllegroApi\Model\FundraisingCampaigns' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\AllegroApi\Model\FundraisingCampaigns' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AllegroApi\Model\FundraisingCampaigns', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\AllegroApi\Model\FundraisingCampaigns';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AllegroApi\Model\FundraisingCampaigns',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation searchFundraisingCampaignsAsync
     *
     * Search fundraising campaigns
     *
     * @param  int $limit Maximum number of returned results. (required)
     * @param  string $phrase Fundraising campaign name or it&#39;s Organization name prefix to search for. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchFundraisingCampaigns'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchFundraisingCampaignsAsync($limit, $phrase, string $contentType = self::contentTypes['searchFundraisingCampaigns'][0])
    {
        return $this->searchFundraisingCampaignsAsyncWithHttpInfo($limit, $phrase, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchFundraisingCampaignsAsyncWithHttpInfo
     *
     * Search fundraising campaigns
     *
     * @param  int $limit Maximum number of returned results. (required)
     * @param  string $phrase Fundraising campaign name or it&#39;s Organization name prefix to search for. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchFundraisingCampaigns'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchFundraisingCampaignsAsyncWithHttpInfo($limit, $phrase, string $contentType = self::contentTypes['searchFundraisingCampaigns'][0])
    {
        $returnType = '\AllegroApi\Model\FundraisingCampaigns';
        $request = $this->searchFundraisingCampaignsRequest($limit, $phrase, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'searchFundraisingCampaigns'
     *
     * @param  int $limit Maximum number of returned results. (required)
     * @param  string $phrase Fundraising campaign name or it&#39;s Organization name prefix to search for. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchFundraisingCampaigns'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function searchFundraisingCampaignsRequest($limit, $phrase, string $contentType = self::contentTypes['searchFundraisingCampaigns'][0])
    {

        // verify the required parameter 'limit' is set
        if ($limit === null || (is_array($limit) && count($limit) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $limit when calling searchFundraisingCampaigns'
            );
        }
        if ($limit > 100) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling CharityApi.searchFundraisingCampaigns, must be smaller than or equal to 100.');
        }
        if ($limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling CharityApi.searchFundraisingCampaigns, must be bigger than or equal to 1.');
        }
        
        // verify the required parameter 'phrase' is set
        if ($phrase === null || (is_array($phrase) && count($phrase) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $phrase when calling searchFundraisingCampaigns'
            );
        }


        $resourcePath = '/charity/fundraising-campaigns';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $phrase,
            'phrase', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/vnd.allegro.beta.v1+json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
