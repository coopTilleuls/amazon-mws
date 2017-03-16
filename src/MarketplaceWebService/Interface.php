<?php
/**
 *  PHP Version 5.
 *
 *  @category    Amazon
 *
 *  @copyright   Copyright 2009 Amazon Technologies, Inc.
 *
 *  @see        http://aws.amazon.com
 *
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *
 *  @version     2009-01-01
 */
/*******************************************************************************

 *  Marketplace Web Service PHP5 Library
 *  Generated: Thu May 07 13:07:36 PDT 2009
 *
 */
/**
 * The Amazon Marketplace Web Service contain APIs for inventory and order management.
 */
interface MarketplaceWebService_Interface
{
    /**
     * Get Report
     * The GetReport operation returns the contents of a report. Reports can potentially be
     * very large (>100MB) which is why we only return one report at a time, and in a
     * streaming fashion.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReport.html
     *
     * @param mixed $request array of parameters for MarketplaceWebService_Model_GetReportRequest request
     *                       or MarketplaceWebService_Model_GetReportRequest object itself
     *
     * @see MarketplaceWebService_Model_GetReportRequest
     *
     * @throws MarketplaceWebService_Exception
     *
     * @return MarketplaceWebService_Model_GetReportResponse MarketplaceWebService_Model_GetReportResponse
     */
    public function getReport($request);

    /**
     * Get Report Schedule Count
     * returns the number of report schedules.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportScheduleCount.html
     *
     * @param mixed $request array of parameters for MarketplaceWebService_Model_GetReportScheduleCountRequest request
     *                       or MarketplaceWebService_Model_GetReportScheduleCountRequest object itself
     *
     * @see MarketplaceWebService_Model_GetReportScheduleCountRequest
     *
     * @throws MarketplaceWebService_Exception
     *
     * @return MarketplaceWebService_Model_GetReportScheduleCountResponse MarketplaceWebService_Model_GetReportScheduleCountResponse
     */
    public function getReportScheduleCount($request);

    /**
     * Get Report Request List By Next Token
     * retrieve the next batch of list items and if there are more items to retrieve.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportRequestListByNextToken.html
     *
     * @param mixed $request array of parameters for MarketplaceWebService_Model_GetReportRequestListByNextTokenRequest request
     *                       or MarketplaceWebService_Model_GetReportRequestListByNextTokenRequest object itself
     *
     * @see MarketplaceWebService_Model_GetReportRequestListByNextTokenRequest
     *
     * @throws MarketplaceWebService_Exception
     *
     * @return MarketplaceWebService_Model_GetReportRequestListByNextTokenResponse MarketplaceWebService_Model_GetReportRequestListByNextTokenResponse
     */
    public function getReportRequestListByNextToken($request);

    /**
     * Update Report Acknowledgements
     * The UpdateReportAcknowledgements operation updates the acknowledged status of one or more reports.
     *
     * @see http://docs.amazonwebservices.com/${docPath}UpdateReportAcknowledgements.html
     *
     * @param mixed $request array of parameters for MarketplaceWebService_Model_UpdateReportAcknowledgementsRequest request
     *                       or MarketplaceWebService_Model_UpdateReportAcknowledgementsRequest object itself
     *
     * @see MarketplaceWebService_Model_UpdateReportAcknowledgementsRequest
     *
     * @throws MarketplaceWebService_Exception
     *
     * @return MarketplaceWebService_Model_UpdateReportAcknowledgementsResponse MarketplaceWebService_Model_UpdateReportAcknowledgementsResponse
     */
    public function updateReportAcknowledgements($request);

    /**
     * Submit Feed
     * Uploads a file for processing together with the necessary
     * metadata to process the file, such as which type of feed it is.
     * PurgeAndReplace if true means that your existing e.g. inventory is
     * wiped out and replace with the contents of this feed - use with
     * caution (the default is false).
     *
     * @see http://docs.amazonwebservices.com/${docPath}SubmitFeed.html
     *
     * @param mixed $request array of parameters for MarketplaceWebService_Model_SubmitFeedRequest request
     *                       or MarketplaceWebService_Model_SubmitFeedRequest object itself
     *
     * @see MarketplaceWebService_Model_SubmitFeedRequest
     *
     * @throws MarketplaceWebService_Exception
     *
     * @return MarketplaceWebService_Model_SubmitFeedResponse MarketplaceWebService_Model_SubmitFeedResponse
     */
    public function submitFeed($request);

    /**
     * Get Report Count
     * returns a count of reports matching your criteria;
     * by default, the number of reports generated in the last 90 days,
     * regardless of acknowledgement status.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportCount.html
     *
     * @param mixed $request array of parameters for MarketplaceWebService_Model_GetReportCountRequest request
     *                       or MarketplaceWebService_Model_GetReportCountRequest object itself
     *
     * @see MarketplaceWebService_Model_GetReportCountRequest
     *
     * @throws MarketplaceWebService_Exception
     *
     * @return MarketplaceWebService_Model_GetReportCountResponse MarketplaceWebService_Model_GetReportCountResponse
     */
    public function getReportCount($request);

    /**
     * Get Feed Submission List By Next Token
     * retrieve the next batch of list items and if there are more items to retrieve.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionListByNextToken.html
     *
     * @param mixed $request array of parameters for MarketplaceWebService_Model_GetFeedSubmissionListByNextTokenRequest request
     *                       or MarketplaceWebService_Model_GetFeedSubmissionListByNextTokenRequest object itself
     *
     * @see MarketplaceWebService_Model_GetFeedSubmissionListByNextTokenRequest
     *
     * @throws MarketplaceWebService_Exception
     *
     * @return MarketplaceWebService_Model_GetFeedSubmissionListByNextTokenResponse MarketplaceWebService_Model_GetFeedSubmissionListByNextTokenResponse
     */
    public function getFeedSubmissionListByNextToken($request);

    /**
     * Cancel Feed Submissions
     * cancels feed submissions - by default all of the submissions of the
     * last 30 days that have not started processing.
     *
     * @see http://docs.amazonwebservices.com/${docPath}CancelFeedSubmissions.html
     *
     * @param mixed $request array of parameters for MarketplaceWebService_Model_CancelFeedSubmissionsRequest request
     *                       or MarketplaceWebService_Model_CancelFeedSubmissionsRequest object itself
     *
     * @see MarketplaceWebService_Model_CancelFeedSubmissionsRequest
     *
     * @throws MarketplaceWebService_Exception
     *
     * @return MarketplaceWebService_Model_CancelFeedSubmissionsResponse MarketplaceWebService_Model_CancelFeedSubmissionsResponse
     */
    public function cancelFeedSubmissions($request);

    /**
     * Request Report
     * requests the generation of a report.
     *
     * @see http://docs.amazonwebservices.com/${docPath}RequestReport.html
     *
     * @param mixed $request array of parameters for MarketplaceWebService_Model_RequestReportRequest request
     *                       or MarketplaceWebService_Model_RequestReportRequest object itself
     *
     * @see MarketplaceWebService_Model_RequestReportRequest
     *
     * @throws MarketplaceWebService_Exception
     *
     * @return MarketplaceWebService_Model_RequestReportResponse MarketplaceWebService_Model_RequestReportResponse
     */
    public function requestReport($request);

    /**
     * Get Feed Submission Count
     * returns the number of feeds matching all of the specified criteria.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionCount.html
     *
     * @param mixed $request array of parameters for MarketplaceWebService_Model_GetFeedSubmissionCountRequest request
     *                       or MarketplaceWebService_Model_GetFeedSubmissionCountRequest object itself
     *
     * @see MarketplaceWebService_Model_GetFeedSubmissionCountRequest
     *
     * @throws MarketplaceWebService_Exception
     *
     * @return MarketplaceWebService_Model_GetFeedSubmissionCountResponse MarketplaceWebService_Model_GetFeedSubmissionCountResponse
     */
    public function getFeedSubmissionCount($request);

    /**
     * Cancel Report Requests
     * cancels report requests that have not yet started processing,
     * by default all those within the last 90 days.
     *
     * @see http://docs.amazonwebservices.com/${docPath}CancelReportRequests.html
     *
     * @param mixed $request array of parameters for MarketplaceWebService_Model_CancelReportRequestsRequest request
     *                       or MarketplaceWebService_Model_CancelReportRequestsRequest object itself
     *
     * @see MarketplaceWebService_Model_CancelReportRequestsRequest
     *
     * @throws MarketplaceWebService_Exception
     *
     * @return MarketplaceWebService_Model_CancelReportRequestsResponse MarketplaceWebService_Model_CancelReportRequestsResponse
     */
    public function cancelReportRequests($request);

    /**
     * Get Report List
     * returns a list of reports; by default the most recent ten reports,
     * regardless of their acknowledgement status.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportList.html
     *
     * @param mixed $request array of parameters for MarketplaceWebService_Model_GetReportListRequest request
     *                       or MarketplaceWebService_Model_GetReportListRequest object itself
     *
     * @see MarketplaceWebService_Model_GetReportListRequest
     *
     * @throws MarketplaceWebService_Exception
     *
     * @return MarketplaceWebService_Model_GetReportListResponse MarketplaceWebService_Model_GetReportListResponse
     */
    public function getReportList($request);

    /**
     * Get Feed Submission Result
     * retrieves the feed processing report.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionResult.html
     *
     * @param mixed $request array of parameters for MarketplaceWebService_Model_GetFeedSubmissionResultRequest request
     *                       or MarketplaceWebService_Model_GetFeedSubmissionResultRequest object itself
     *
     * @see MarketplaceWebService_Model_GetFeedSubmissionResultRequest
     *
     * @throws MarketplaceWebService_Exception
     *
     * @return MarketplaceWebService_Model_GetFeedSubmissionResultResponse MarketplaceWebService_Model_GetFeedSubmissionResultResponse
     */
    public function getFeedSubmissionResult($request);

    /**
     * Get Feed Submission List
     * returns a list of feed submission identifiers and their associated metadata.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionList.html
     *
     * @param mixed $request array of parameters for MarketplaceWebService_Model_GetFeedSubmissionListRequest request
     *                       or MarketplaceWebService_Model_GetFeedSubmissionListRequest object itself
     *
     * @see MarketplaceWebService_Model_GetFeedSubmissionListRequest
     *
     * @throws MarketplaceWebService_Exception
     *
     * @return MarketplaceWebService_Model_GetFeedSubmissionListResponse MarketplaceWebService_Model_GetFeedSubmissionListResponse
     */
    public function getFeedSubmissionList($request);

    /**
     * Get Report Request List
     * returns a list of report requests ids and their associated metadata.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportRequestList.html
     *
     * @param mixed $request array of parameters for MarketplaceWebService_Model_GetReportRequestListRequest request
     *                       or MarketplaceWebService_Model_GetReportRequestListRequest object itself
     *
     * @see MarketplaceWebService_Model_GetReportRequestListRequest
     *
     * @throws MarketplaceWebService_Exception
     *
     * @return MarketplaceWebService_Model_GetReportRequestListResponse MarketplaceWebService_Model_GetReportRequestListResponse
     */
    public function getReportRequestList($request);

    /**
     * Get Report Schedule List By Next Token
     * retrieve the next batch of list items and if there are more items to retrieve.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportScheduleListByNextToken.html
     *
     * @param mixed $request array of parameters for MarketplaceWebService_Model_GetReportScheduleListByNextTokenRequest request
     *                       or MarketplaceWebService_Model_GetReportScheduleListByNextTokenRequest object itself
     *
     * @see MarketplaceWebService_Model_GetReportScheduleListByNextTokenRequest
     *
     * @throws MarketplaceWebService_Exception
     *
     * @return MarketplaceWebService_Model_GetReportScheduleListByNextTokenResponse MarketplaceWebService_Model_GetReportScheduleListByNextTokenResponse
     */
    public function getReportScheduleListByNextToken($request);

    /**
     * Get Report List By Next Token
     * retrieve the next batch of list items and if there are more items to retrieve.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportListByNextToken.html
     *
     * @param mixed $request array of parameters for MarketplaceWebService_Model_GetReportListByNextTokenRequest request
     *                       or MarketplaceWebService_Model_GetReportListByNextTokenRequest object itself
     *
     * @see MarketplaceWebService_Model_GetReportListByNextTokenRequest
     *
     * @throws MarketplaceWebService_Exception
     *
     * @return MarketplaceWebService_Model_GetReportListByNextTokenResponse MarketplaceWebService_Model_GetReportListByNextTokenResponse
     */
    public function getReportListByNextToken($request);

    /**
     * Manage Report Schedule
     * Creates, updates, or deletes a report schedule
     * for a given report type, such as order reports in particular.
     *
     * @see http://docs.amazonwebservices.com/${docPath}ManageReportSchedule.html
     *
     * @param mixed $request array of parameters for MarketplaceWebService_Model_ManageReportScheduleRequest request
     *                       or MarketplaceWebService_Model_ManageReportScheduleRequest object itself
     *
     * @see MarketplaceWebService_Model_ManageReportScheduleRequest
     *
     * @throws MarketplaceWebService_Exception
     *
     * @return MarketplaceWebService_Model_ManageReportScheduleResponse MarketplaceWebService_Model_ManageReportScheduleResponse
     */
    public function manageReportSchedule($request);

    /**
     * Get Report Request Count
     * returns a count of report requests; by default all the report
     * requests in the last 90 days.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportRequestCount.html
     *
     * @param mixed $request array of parameters for MarketplaceWebService_Model_GetReportRequestCountRequest request
     *                       or MarketplaceWebService_Model_GetReportRequestCountRequest object itself
     *
     * @see MarketplaceWebService_Model_GetReportRequestCountRequest
     *
     * @throws MarketplaceWebService_Exception
     *
     * @return MarketplaceWebService_Model_GetReportRequestCountResponse MarketplaceWebService_Model_GetReportRequestCountResponse
     */
    public function getReportRequestCount($request);

    /**
     * Get Report Schedule List
     * returns the list of report schedules.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportScheduleList.html
     *
     * @param mixed $request array of parameters for MarketplaceWebService_Model_GetReportScheduleListRequest request
     *                       or MarketplaceWebService_Model_GetReportScheduleListRequest object itself
     *
     * @see MarketplaceWebService_Model_GetReportScheduleListRequest
     *
     * @throws MarketplaceWebService_Exception
     *
     * @return MarketplaceWebService_Model_GetReportScheduleListResponse MarketplaceWebService_Model_GetReportScheduleListResponse
     */
    public function getReportScheduleList($request);
}
