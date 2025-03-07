<?php
/**
 * FulfillmentStockApi
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
 * FulfillmentStockApi Class Doc Comment
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FulfillmentStockApi
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
        'getFulfillmentStock' => [
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
     * Operation getFulfillmentStock
     *
     * Get available stock
     *
     * @param  int $offset The offset of elements in the response. Ignored for text/csv content type. (optional, default to 0)
     * @param  int $limit Maximum number of elements in response. Ignored for text/csv content type. (optional, default to 50)
     * @param  string $phrase Filtering search results by product name. (optional)
     * @param  string $sort Defines how elements are sorted in response. Minus sign can be added to imply descending sort order. Ignored for text/csv content type. Possible values for the \&quot;sort\&quot; parameter:   * -available - sorting by quantity of available products (descending)   * available - sorting by quantity of available products (ascending)   * -unfulfillable - sorting by quantity of unfulfillable products (descending)   * unfulfillable - sorting by quantity of unfulfillable products (ascending)   * -name - sorting by product’s name (descending)   * name - sorting by product’s name (ascending)   * lastWeekSalesAverage - sorting by product last week average sales (ascending)   * -lastWeekSalesAverage - sorting by product last week average sales (descending)   * reserve - sorting by reserve.outOfStockIn field (ascending)   * -reserve - sorting by reserve.outOfStockIn field (descending)   * lastThirtyDaysSalesSum - sorting by product last month sum sales (ascending)   * -lastThirtyDaysSalesSum - sorting by product last month sum sales (descending)   * storageFee - sorting by storage fee (ascending). The order by fee status is: NOT_APPLICABLE, then INCLUDED_IN_STORAGE_FEE, then CHARGED ordered by amountGross ascending.   * -storageFee - sorting by storage fee (descending). The order by fee status is: CHARGED ordered by amountGross descending, then INCLUDED_IN_STORAGE_FEE, then NOT_APPLICABLE. (optional, default to 'name')
     * @param  string $product_id Filtering search results by fulfillment product identifier. Ignored for text/csv content type. (optional)
     * @param  string[] $product_availability Filtering search results by availability (optional)
     * @param  string $product_status Filtering search results by status (optional)
     * @param  string $storage_fee Filtering search results storage fee. Two values are possible: FREE - products storage fee is included in basic fee or merchant is in grace period PAID - products for which an extra storage fee is calculated (optional)
     * @param  string $asn_status Filtering search results by ASN status. Following values are allowed: SUBMITTED - Advanced Ship Notice document has been submitted and it contains a particular product. Only the products that have ASN with products on it are returned. NOT_FOUND - Advanced Ship Notice that contains a particular product was not found. It has not been submitted, may be expired, or products have already been delivered to the warehouse. Only the products that don&#39;t have related ASN with products on it are returned. (optional)
     * @param  int $out_of_stock_in_from Filter by products with outOfStockIn greater than or equal (optional)
     * @param  int $out_of_stock_in_to Filter by products with outOfStockIn less than or equal (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFulfillmentStock'] to see the possible values for this operation
     *
     * @throws \AllegroApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \AllegroApi\Model\StockProductList|\AllegroApi\Model\ErrorsHolder
     */
    public function getFulfillmentStock($offset = 0, $limit = 50, $phrase = null, $sort = 'name', $product_id = null, $product_availability = null, $product_status = null, $storage_fee = null, $asn_status = null, $out_of_stock_in_from = null, $out_of_stock_in_to = null, string $contentType = self::contentTypes['getFulfillmentStock'][0])
    {
        list($response) = $this->getFulfillmentStockWithHttpInfo($offset, $limit, $phrase, $sort, $product_id, $product_availability, $product_status, $storage_fee, $asn_status, $out_of_stock_in_from, $out_of_stock_in_to, $contentType);
        return $response;
    }

    /**
     * Operation getFulfillmentStockWithHttpInfo
     *
     * Get available stock
     *
     * @param  int $offset The offset of elements in the response. Ignored for text/csv content type. (optional, default to 0)
     * @param  int $limit Maximum number of elements in response. Ignored for text/csv content type. (optional, default to 50)
     * @param  string $phrase Filtering search results by product name. (optional)
     * @param  string $sort Defines how elements are sorted in response. Minus sign can be added to imply descending sort order. Ignored for text/csv content type. Possible values for the \&quot;sort\&quot; parameter:   * -available - sorting by quantity of available products (descending)   * available - sorting by quantity of available products (ascending)   * -unfulfillable - sorting by quantity of unfulfillable products (descending)   * unfulfillable - sorting by quantity of unfulfillable products (ascending)   * -name - sorting by product’s name (descending)   * name - sorting by product’s name (ascending)   * lastWeekSalesAverage - sorting by product last week average sales (ascending)   * -lastWeekSalesAverage - sorting by product last week average sales (descending)   * reserve - sorting by reserve.outOfStockIn field (ascending)   * -reserve - sorting by reserve.outOfStockIn field (descending)   * lastThirtyDaysSalesSum - sorting by product last month sum sales (ascending)   * -lastThirtyDaysSalesSum - sorting by product last month sum sales (descending)   * storageFee - sorting by storage fee (ascending). The order by fee status is: NOT_APPLICABLE, then INCLUDED_IN_STORAGE_FEE, then CHARGED ordered by amountGross ascending.   * -storageFee - sorting by storage fee (descending). The order by fee status is: CHARGED ordered by amountGross descending, then INCLUDED_IN_STORAGE_FEE, then NOT_APPLICABLE. (optional, default to 'name')
     * @param  string $product_id Filtering search results by fulfillment product identifier. Ignored for text/csv content type. (optional)
     * @param  string[] $product_availability Filtering search results by availability (optional)
     * @param  string $product_status Filtering search results by status (optional)
     * @param  string $storage_fee Filtering search results storage fee. Two values are possible: FREE - products storage fee is included in basic fee or merchant is in grace period PAID - products for which an extra storage fee is calculated (optional)
     * @param  string $asn_status Filtering search results by ASN status. Following values are allowed: SUBMITTED - Advanced Ship Notice document has been submitted and it contains a particular product. Only the products that have ASN with products on it are returned. NOT_FOUND - Advanced Ship Notice that contains a particular product was not found. It has not been submitted, may be expired, or products have already been delivered to the warehouse. Only the products that don&#39;t have related ASN with products on it are returned. (optional)
     * @param  int $out_of_stock_in_from Filter by products with outOfStockIn greater than or equal (optional)
     * @param  int $out_of_stock_in_to Filter by products with outOfStockIn less than or equal (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFulfillmentStock'] to see the possible values for this operation
     *
     * @throws \AllegroApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \AllegroApi\Model\StockProductList|\AllegroApi\Model\ErrorsHolder, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFulfillmentStockWithHttpInfo($offset = 0, $limit = 50, $phrase = null, $sort = 'name', $product_id = null, $product_availability = null, $product_status = null, $storage_fee = null, $asn_status = null, $out_of_stock_in_from = null, $out_of_stock_in_to = null, string $contentType = self::contentTypes['getFulfillmentStock'][0])
    {
        $request = $this->getFulfillmentStockRequest($offset, $limit, $phrase, $sort, $product_id, $product_availability, $product_status, $storage_fee, $asn_status, $out_of_stock_in_from, $out_of_stock_in_to, $contentType);

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
                    if ('\AllegroApi\Model\StockProductList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\AllegroApi\Model\StockProductList' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AllegroApi\Model\StockProductList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\AllegroApi\Model\ErrorsHolder' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\AllegroApi\Model\ErrorsHolder' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AllegroApi\Model\ErrorsHolder', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\AllegroApi\Model\StockProductList';
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
                        '\AllegroApi\Model\StockProductList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AllegroApi\Model\ErrorsHolder',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getFulfillmentStockAsync
     *
     * Get available stock
     *
     * @param  int $offset The offset of elements in the response. Ignored for text/csv content type. (optional, default to 0)
     * @param  int $limit Maximum number of elements in response. Ignored for text/csv content type. (optional, default to 50)
     * @param  string $phrase Filtering search results by product name. (optional)
     * @param  string $sort Defines how elements are sorted in response. Minus sign can be added to imply descending sort order. Ignored for text/csv content type. Possible values for the \&quot;sort\&quot; parameter:   * -available - sorting by quantity of available products (descending)   * available - sorting by quantity of available products (ascending)   * -unfulfillable - sorting by quantity of unfulfillable products (descending)   * unfulfillable - sorting by quantity of unfulfillable products (ascending)   * -name - sorting by product’s name (descending)   * name - sorting by product’s name (ascending)   * lastWeekSalesAverage - sorting by product last week average sales (ascending)   * -lastWeekSalesAverage - sorting by product last week average sales (descending)   * reserve - sorting by reserve.outOfStockIn field (ascending)   * -reserve - sorting by reserve.outOfStockIn field (descending)   * lastThirtyDaysSalesSum - sorting by product last month sum sales (ascending)   * -lastThirtyDaysSalesSum - sorting by product last month sum sales (descending)   * storageFee - sorting by storage fee (ascending). The order by fee status is: NOT_APPLICABLE, then INCLUDED_IN_STORAGE_FEE, then CHARGED ordered by amountGross ascending.   * -storageFee - sorting by storage fee (descending). The order by fee status is: CHARGED ordered by amountGross descending, then INCLUDED_IN_STORAGE_FEE, then NOT_APPLICABLE. (optional, default to 'name')
     * @param  string $product_id Filtering search results by fulfillment product identifier. Ignored for text/csv content type. (optional)
     * @param  string[] $product_availability Filtering search results by availability (optional)
     * @param  string $product_status Filtering search results by status (optional)
     * @param  string $storage_fee Filtering search results storage fee. Two values are possible: FREE - products storage fee is included in basic fee or merchant is in grace period PAID - products for which an extra storage fee is calculated (optional)
     * @param  string $asn_status Filtering search results by ASN status. Following values are allowed: SUBMITTED - Advanced Ship Notice document has been submitted and it contains a particular product. Only the products that have ASN with products on it are returned. NOT_FOUND - Advanced Ship Notice that contains a particular product was not found. It has not been submitted, may be expired, or products have already been delivered to the warehouse. Only the products that don&#39;t have related ASN with products on it are returned. (optional)
     * @param  int $out_of_stock_in_from Filter by products with outOfStockIn greater than or equal (optional)
     * @param  int $out_of_stock_in_to Filter by products with outOfStockIn less than or equal (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFulfillmentStock'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFulfillmentStockAsync($offset = 0, $limit = 50, $phrase = null, $sort = 'name', $product_id = null, $product_availability = null, $product_status = null, $storage_fee = null, $asn_status = null, $out_of_stock_in_from = null, $out_of_stock_in_to = null, string $contentType = self::contentTypes['getFulfillmentStock'][0])
    {
        return $this->getFulfillmentStockAsyncWithHttpInfo($offset, $limit, $phrase, $sort, $product_id, $product_availability, $product_status, $storage_fee, $asn_status, $out_of_stock_in_from, $out_of_stock_in_to, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFulfillmentStockAsyncWithHttpInfo
     *
     * Get available stock
     *
     * @param  int $offset The offset of elements in the response. Ignored for text/csv content type. (optional, default to 0)
     * @param  int $limit Maximum number of elements in response. Ignored for text/csv content type. (optional, default to 50)
     * @param  string $phrase Filtering search results by product name. (optional)
     * @param  string $sort Defines how elements are sorted in response. Minus sign can be added to imply descending sort order. Ignored for text/csv content type. Possible values for the \&quot;sort\&quot; parameter:   * -available - sorting by quantity of available products (descending)   * available - sorting by quantity of available products (ascending)   * -unfulfillable - sorting by quantity of unfulfillable products (descending)   * unfulfillable - sorting by quantity of unfulfillable products (ascending)   * -name - sorting by product’s name (descending)   * name - sorting by product’s name (ascending)   * lastWeekSalesAverage - sorting by product last week average sales (ascending)   * -lastWeekSalesAverage - sorting by product last week average sales (descending)   * reserve - sorting by reserve.outOfStockIn field (ascending)   * -reserve - sorting by reserve.outOfStockIn field (descending)   * lastThirtyDaysSalesSum - sorting by product last month sum sales (ascending)   * -lastThirtyDaysSalesSum - sorting by product last month sum sales (descending)   * storageFee - sorting by storage fee (ascending). The order by fee status is: NOT_APPLICABLE, then INCLUDED_IN_STORAGE_FEE, then CHARGED ordered by amountGross ascending.   * -storageFee - sorting by storage fee (descending). The order by fee status is: CHARGED ordered by amountGross descending, then INCLUDED_IN_STORAGE_FEE, then NOT_APPLICABLE. (optional, default to 'name')
     * @param  string $product_id Filtering search results by fulfillment product identifier. Ignored for text/csv content type. (optional)
     * @param  string[] $product_availability Filtering search results by availability (optional)
     * @param  string $product_status Filtering search results by status (optional)
     * @param  string $storage_fee Filtering search results storage fee. Two values are possible: FREE - products storage fee is included in basic fee or merchant is in grace period PAID - products for which an extra storage fee is calculated (optional)
     * @param  string $asn_status Filtering search results by ASN status. Following values are allowed: SUBMITTED - Advanced Ship Notice document has been submitted and it contains a particular product. Only the products that have ASN with products on it are returned. NOT_FOUND - Advanced Ship Notice that contains a particular product was not found. It has not been submitted, may be expired, or products have already been delivered to the warehouse. Only the products that don&#39;t have related ASN with products on it are returned. (optional)
     * @param  int $out_of_stock_in_from Filter by products with outOfStockIn greater than or equal (optional)
     * @param  int $out_of_stock_in_to Filter by products with outOfStockIn less than or equal (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFulfillmentStock'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFulfillmentStockAsyncWithHttpInfo($offset = 0, $limit = 50, $phrase = null, $sort = 'name', $product_id = null, $product_availability = null, $product_status = null, $storage_fee = null, $asn_status = null, $out_of_stock_in_from = null, $out_of_stock_in_to = null, string $contentType = self::contentTypes['getFulfillmentStock'][0])
    {
        $returnType = '\AllegroApi\Model\StockProductList';
        $request = $this->getFulfillmentStockRequest($offset, $limit, $phrase, $sort, $product_id, $product_availability, $product_status, $storage_fee, $asn_status, $out_of_stock_in_from, $out_of_stock_in_to, $contentType);

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
     * Create request for operation 'getFulfillmentStock'
     *
     * @param  int $offset The offset of elements in the response. Ignored for text/csv content type. (optional, default to 0)
     * @param  int $limit Maximum number of elements in response. Ignored for text/csv content type. (optional, default to 50)
     * @param  string $phrase Filtering search results by product name. (optional)
     * @param  string $sort Defines how elements are sorted in response. Minus sign can be added to imply descending sort order. Ignored for text/csv content type. Possible values for the \&quot;sort\&quot; parameter:   * -available - sorting by quantity of available products (descending)   * available - sorting by quantity of available products (ascending)   * -unfulfillable - sorting by quantity of unfulfillable products (descending)   * unfulfillable - sorting by quantity of unfulfillable products (ascending)   * -name - sorting by product’s name (descending)   * name - sorting by product’s name (ascending)   * lastWeekSalesAverage - sorting by product last week average sales (ascending)   * -lastWeekSalesAverage - sorting by product last week average sales (descending)   * reserve - sorting by reserve.outOfStockIn field (ascending)   * -reserve - sorting by reserve.outOfStockIn field (descending)   * lastThirtyDaysSalesSum - sorting by product last month sum sales (ascending)   * -lastThirtyDaysSalesSum - sorting by product last month sum sales (descending)   * storageFee - sorting by storage fee (ascending). The order by fee status is: NOT_APPLICABLE, then INCLUDED_IN_STORAGE_FEE, then CHARGED ordered by amountGross ascending.   * -storageFee - sorting by storage fee (descending). The order by fee status is: CHARGED ordered by amountGross descending, then INCLUDED_IN_STORAGE_FEE, then NOT_APPLICABLE. (optional, default to 'name')
     * @param  string $product_id Filtering search results by fulfillment product identifier. Ignored for text/csv content type. (optional)
     * @param  string[] $product_availability Filtering search results by availability (optional)
     * @param  string $product_status Filtering search results by status (optional)
     * @param  string $storage_fee Filtering search results storage fee. Two values are possible: FREE - products storage fee is included in basic fee or merchant is in grace period PAID - products for which an extra storage fee is calculated (optional)
     * @param  string $asn_status Filtering search results by ASN status. Following values are allowed: SUBMITTED - Advanced Ship Notice document has been submitted and it contains a particular product. Only the products that have ASN with products on it are returned. NOT_FOUND - Advanced Ship Notice that contains a particular product was not found. It has not been submitted, may be expired, or products have already been delivered to the warehouse. Only the products that don&#39;t have related ASN with products on it are returned. (optional)
     * @param  int $out_of_stock_in_from Filter by products with outOfStockIn greater than or equal (optional)
     * @param  int $out_of_stock_in_to Filter by products with outOfStockIn less than or equal (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getFulfillmentStock'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getFulfillmentStockRequest($offset = 0, $limit = 50, $phrase = null, $sort = 'name', $product_id = null, $product_availability = null, $product_status = null, $storage_fee = null, $asn_status = null, $out_of_stock_in_from = null, $out_of_stock_in_to = null, string $contentType = self::contentTypes['getFulfillmentStock'][0])
    {

        if ($offset !== null && $offset < 0) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling FulfillmentStockApi.getFulfillmentStock, must be bigger than or equal to 0.');
        }
        
        if ($limit !== null && $limit > 1000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling FulfillmentStockApi.getFulfillmentStock, must be smaller than or equal to 1000.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling FulfillmentStockApi.getFulfillmentStock, must be bigger than or equal to 1.');
        }
        
        if ($phrase !== null && strlen($phrase) < 3) {
            throw new \InvalidArgumentException('invalid length for "$phrase" when calling FulfillmentStockApi.getFulfillmentStock, must be bigger than or equal to 3.');
        }
        









        $resourcePath = '/fulfillment/stock';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $phrase,
            'phrase', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $product_id,
            'productId', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $product_availability,
            'productAvailability', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $product_status,
            'productStatus', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $storage_fee,
            'storageFee', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $asn_status,
            'asnStatus', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $out_of_stock_in_from,
            'outOfStockInFrom', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $out_of_stock_in_to,
            'outOfStockInTo', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/vnd.allegro.public.v1+json', 'text/csv', 'application/json', ],
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
