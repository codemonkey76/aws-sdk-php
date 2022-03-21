<?php
// This file was auto-generated from sdk-root/src/data/timestream-query/2018-11-01/docs-2.json
return [ 'version' => '2.0', 'service' => '<fullname>Amazon Timestream Query </fullname> <p/>', 'operations' => [ 'CancelQuery' => '<p> Cancels a query that has been issued. Cancellation is provided only if the query has not completed running before the cancellation request was issued. Because cancellation is an idempotent operation, subsequent cancellation requests will return a <code>CancellationMessage</code>, indicating that the query has already been canceled. See <a href="https://docs.aws.amazon.com/timestream/latest/developerguide/code-samples.cancel-query.html">code sample</a> for details. </p>', 'CreateScheduledQuery' => '<p> Create a scheduled query that will be run on your behalf at the configured schedule. Timestream assumes the execution role provided as part of the <code>ScheduledQueryExecutionRoleArn</code> parameter to run the query. You can use the <code>NotificationConfiguration</code> parameter to configure notification for your scheduled query operations.</p>', 'DeleteScheduledQuery' => '<p>Deletes a given scheduled query. This is an irreversible operation. </p>', 'DescribeEndpoints' => '<p>DescribeEndpoints returns a list of available endpoints to make Timestream API calls against. This API is available through both Write and Query.</p> <p>Because the Timestream SDKs are designed to transparently work with the service’s architecture, including the management and mapping of the service endpoints, <i>it is not recommended that you use this API unless</i>:</p> <ul> <li> <p>You are using <a href="https://docs.aws.amazon.com/timestream/latest/developerguide/VPCEndpoints">VPC endpoints (Amazon Web Services PrivateLink) with Timestream </a> </p> </li> <li> <p>Your application uses a programming language that does not yet have SDK support</p> </li> <li> <p>You require better control over the client-side implementation</p> </li> </ul> <p>For detailed information on how and when to use and implement DescribeEndpoints, see <a href="https://docs.aws.amazon.com/timestream/latest/developerguide/Using.API.html#Using-API.endpoint-discovery">The Endpoint Discovery Pattern</a>.</p>', 'DescribeScheduledQuery' => '<p>Provides detailed information about a scheduled query.</p>', 'ExecuteScheduledQuery' => '<p> You can use this API to run a scheduled query manually. </p>', 'ListScheduledQueries' => '<p>Gets a list of all scheduled queries in the caller\'s Amazon account and Region. <code>ListScheduledQueries</code> is eventually consistent. </p>', 'ListTagsForResource' => '<p>List all tags on a Timestream query resource.</p>', 'PrepareQuery' => '<p>A synchronous operation that allows you to submit a query with parameters to be stored by Timestream for later running. Timestream only supports using this operation with the <code>PrepareQueryRequest$ValidateOnly</code> set to <code>true</code>. </p>', 'Query' => '<p> <code>Query</code> is a synchronous operation that enables you to run a query against your Amazon Timestream data. <code>Query</code> will time out after 60 seconds. You must update the default timeout in the SDK to support a timeout of 60 seconds. See the <a href="https://docs.aws.amazon.com/timestream/latest/developerguide/code-samples.run-query.html">code sample</a> for details. </p> <p>Your query request will fail in the following cases:</p> <ul> <li> <p> If you submit a <code>Query</code> request with the same client token outside of the 5-minute idempotency window. </p> </li> <li> <p> If you submit a <code>Query</code> request with the same client token, but change other parameters, within the 5-minute idempotency window. </p> </li> <li> <p> If the size of the row (including the query metadata) exceeds 1 MB, then the query will fail with the following error message: </p> <p> <code>Query aborted as max page response size has been exceeded by the output result row</code> </p> </li> <li> <p> If the IAM principal of the query initiator and the result reader are not the same and/or the query initiator and the result reader do not have the same query string in the query requests, the query will fail with an <code>Invalid pagination token</code> error. </p> </li> </ul>', 'TagResource' => '<p>Associate a set of tags with a Timestream resource. You can then activate these user-defined tags so that they appear on the Billing and Cost Management console for cost allocation tracking. </p>', 'UntagResource' => '<p>Removes the association of tags from a Timestream query resource.</p>', 'UpdateScheduledQuery' => '<p>Update a scheduled query.</p>', ], 'shapes' => [ 'AccessDeniedException' => [ 'base' => '<p> You are not authorized to perform this action. </p>', 'refs' => [], ], 'AmazonResourceName' => [ 'base' => NULL, 'refs' => [ 'CreateScheduledQueryRequest$ScheduledQueryExecutionRoleArn' => '<p>The ARN for the IAM role that Timestream will assume when running the scheduled query. </p>', 'CreateScheduledQueryResponse$Arn' => '<p>ARN for the created scheduled query.</p>', 'DeleteScheduledQueryRequest$ScheduledQueryArn' => '<p>The ARN of the scheduled query. </p>', 'DescribeScheduledQueryRequest$ScheduledQueryArn' => '<p>The ARN of the scheduled query.</p>', 'ExecuteScheduledQueryRequest$ScheduledQueryArn' => '<p>ARN of the scheduled query.</p>', 'ListTagsForResourceRequest$ResourceARN' => '<p>The Timestream resource with tags to be listed. This value is an Amazon Resource Name (ARN).</p>', 'ResourceNotFoundException$ScheduledQueryArn' => '<p>The ARN of the scheduled query.</p>', 'ScheduledQuery$Arn' => '<p>The Amazon Resource Name.</p>', 'ScheduledQueryDescription$Arn' => '<p>Scheduled query ARN.</p>', 'ScheduledQueryDescription$ScheduledQueryExecutionRoleArn' => '<p>IAM role that Timestream uses to run the schedule query.</p>', 'SnsConfiguration$TopicArn' => '<p>SNS topic ARN that the scheduled query status notifications will be sent to.</p>', 'TagResourceRequest$ResourceARN' => '<p>Identifies the Timestream resource to which tags should be added. This value is an Amazon Resource Name (ARN).</p>', 'UntagResourceRequest$ResourceARN' => '<p>The Timestream resource that the tags will be removed from. This value is an Amazon Resource Name (ARN). </p>', 'UpdateScheduledQueryRequest$ScheduledQueryArn' => '<p>ARN of the scheuled query.</p>', ], ], 'CancelQueryRequest' => [ 'base' => NULL, 'refs' => [], ], 'CancelQueryResponse' => [ 'base' => NULL, 'refs' => [], ], 'ClientRequestToken' => [ 'base' => NULL, 'refs' => [ 'QueryRequest$ClientToken' => '<p> Unique, case-sensitive string of up to 64 ASCII characters specified when a <code>Query</code> request is made. Providing a <code>ClientToken</code> makes the call to <code>Query</code> <i>idempotent</i>. This means that running the same query repeatedly will produce the same result. In other words, making multiple identical <code>Query</code> requests has the same effect as making a single request. When using <code>ClientToken</code> in a query, note the following: </p> <ul> <li> <p> If the Query API is instantiated without a <code>ClientToken</code>, the Query SDK generates a <code>ClientToken</code> on your behalf.</p> </li> <li> <p>If the <code>Query</code> invocation only contains the <code>ClientToken</code> but does not include a <code>NextToken</code>, that invocation of <code>Query</code> is assumed to be a new query run.</p> </li> <li> <p>If the invocation contains <code>NextToken</code>, that particular invocation is assumed to be a subsequent invocation of a prior call to the Query API, and a result set is returned.</p> </li> <li> <p> After 4 hours, any request with the same <code>ClientToken</code> is treated as a new request. </p> </li> </ul>', ], ], 'ClientToken' => [ 'base' => NULL, 'refs' => [ 'CreateScheduledQueryRequest$ClientToken' => '<p>Using a ClientToken makes the call to CreateScheduledQuery idempotent, in other words, making the same request repeatedly will produce the same result. Making multiple identical CreateScheduledQuery requests has the same effect as making a single request. </p> <ul> <li> <p> If CreateScheduledQuery is called without a <code>ClientToken</code>, the Query SDK generates a <code>ClientToken</code> on your behalf.</p> </li> <li> <p> After 8 hours, any request with the same <code>ClientToken</code> is treated as a new request. </p> </li> </ul>', 'ExecuteScheduledQueryRequest$ClientToken' => '<p>Not used. </p>', ], ], 'ColumnInfo' => [ 'base' => '<p> Contains the metadata for query results such as the column names, data types, and other attributes. </p>', 'refs' => [ 'ColumnInfoList$member' => NULL, 'Type$ArrayColumnInfo' => '<p>Indicates if the column is an array.</p>', 'Type$TimeSeriesMeasureValueColumnInfo' => '<p>Indicates if the column is a timeseries data type.</p>', ], ], 'ColumnInfoList' => [ 'base' => NULL, 'refs' => [ 'QueryResponse$ColumnInfo' => '<p> The column data types of the returned result set. </p>', 'Type$RowColumnInfo' => '<p>Indicates if the column is a row.</p>', ], ], 'ConflictException' => [ 'base' => '<p> Unable to poll results for a cancelled query. </p>', 'refs' => [], ], 'CreateScheduledQueryRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateScheduledQueryResponse' => [ 'base' => NULL, 'refs' => [], ], 'Datum' => [ 'base' => '<p> Datum represents a single data point in a query result. </p>', 'refs' => [ 'DatumList$member' => NULL, 'TimeSeriesDataPoint$Value' => '<p>The measure value for the data point.</p>', ], ], 'DatumList' => [ 'base' => NULL, 'refs' => [ 'Datum$ArrayValue' => '<p> Indicates if the data point is an array. </p>', 'Row$Data' => '<p>List of data points in a single row of the result set.</p>', ], ], 'DeleteScheduledQueryRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeEndpointsRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeEndpointsResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeScheduledQueryRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeScheduledQueryResponse' => [ 'base' => NULL, 'refs' => [], ], 'DimensionMapping' => [ 'base' => '<p>This type is used to map column(s) from the query result to a dimension in the destination table.</p>', 'refs' => [ 'DimensionMappingList$member' => NULL, ], ], 'DimensionMappingList' => [ 'base' => NULL, 'refs' => [ 'TimestreamConfiguration$DimensionMappings' => '<p> This is to allow mapping column(s) from the query result to the dimension in the destination table. </p>', ], ], 'DimensionValueType' => [ 'base' => NULL, 'refs' => [ 'DimensionMapping$DimensionValueType' => '<p>Type for the dimension. </p>', ], ], 'Double' => [ 'base' => NULL, 'refs' => [ 'QueryStatus$ProgressPercentage' => '<p>The progress of the query, expressed as a percentage.</p>', ], ], 'Endpoint' => [ 'base' => '<p>Represents an available endpoint against which to make API calls against, as well as the TTL for that endpoint.</p>', 'refs' => [ 'Endpoints$member' => NULL, ], ], 'Endpoints' => [ 'base' => NULL, 'refs' => [ 'DescribeEndpointsResponse$Endpoints' => '<p>An <code>Endpoints</code> object is returned when a <code>DescribeEndpoints</code> request is made.</p>', ], ], 'ErrorMessage' => [ 'base' => NULL, 'refs' => [ 'ConflictException$Message' => NULL, 'InternalServerException$Message' => NULL, 'InvalidEndpointException$Message' => NULL, 'QueryExecutionException$Message' => NULL, 'ResourceNotFoundException$Message' => NULL, 'ScheduledQueryRunSummary$FailureReason' => '<p>Error message for the scheduled query in case of failure. You might have to look at the error report to get more detailed error reasons. </p>', 'ServiceQuotaExceededException$Message' => NULL, 'ThrottlingException$Message' => NULL, 'ValidationException$Message' => NULL, ], ], 'ErrorReportConfiguration' => [ 'base' => '<p>Configuration required for error reporting.</p>', 'refs' => [ 'CreateScheduledQueryRequest$ErrorReportConfiguration' => '<p>Configuration for error reporting. Error reports will be generated when a problem is encountered when writing the query results. </p>', 'ScheduledQuery$ErrorReportConfiguration' => '<p>Configuration for scheduled query error reporting.</p>', 'ScheduledQueryDescription$ErrorReportConfiguration' => '<p>Error-reporting configuration for the scheduled query.</p>', ], ], 'ErrorReportLocation' => [ 'base' => '<p>This contains the location of the error report for a single scheduled query call. </p>', 'refs' => [ 'ScheduledQueryRunSummary$ErrorReportLocation' => '<p>S3 location for error report.</p>', ], ], 'ExecuteScheduledQueryRequest' => [ 'base' => NULL, 'refs' => [], ], 'ExecutionStats' => [ 'base' => '<p>Statistics for a single scheduled query run.</p>', 'refs' => [ 'ScheduledQueryRunSummary$ExecutionStats' => '<p>Runtime statistics for a scheduled run.</p>', ], ], 'InternalServerException' => [ 'base' => '<p> Timestream was unable to fully process this request because of an internal server error. </p>', 'refs' => [], ], 'InvalidEndpointException' => [ 'base' => '<p>The requested endpoint was not valid.</p>', 'refs' => [], ], 'ListScheduledQueriesRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListScheduledQueriesResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'Long' => [ 'base' => NULL, 'refs' => [ 'Endpoint$CachePeriodInMinutes' => '<p>The TTL for the endpoint, in minutes.</p>', 'ExecutionStats$ExecutionTimeInMillis' => '<p>Total time, measured in milliseconds, that was needed for the scheduled query run to complete.</p>', 'ExecutionStats$DataWrites' => '<p>Data writes metered for records ingested in a single scheduled query run.</p>', 'ExecutionStats$BytesMetered' => '<p>Bytes metered for a single scheduled query run.</p>', 'ExecutionStats$RecordsIngested' => '<p>The number of records ingested for a single scheduled query run. </p>', 'ExecutionStats$QueryResultRows' => '<p>Number of rows present in the output from running a query before ingestion to destination data source.</p>', 'QueryStatus$CumulativeBytesScanned' => '<p>The amount of data scanned by the query in bytes. This is a cumulative sum and represents the total amount of bytes scanned since the query was started. </p>', 'QueryStatus$CumulativeBytesMetered' => '<p>The amount of data scanned by the query in bytes that you will be charged for. This is a cumulative sum and represents the total amount of data that you will be charged for since the query was started. The charge is applied only once and is either applied when the query completes running or when the query is cancelled. </p>', ], ], 'MaxQueryResults' => [ 'base' => NULL, 'refs' => [ 'QueryRequest$MaxRows' => '<p> The total number of rows to be returned in the <code>Query</code> output. The initial run of <code>Query</code> with a <code>MaxRows</code> value specified will return the result set of the query in two cases: </p> <ul> <li> <p>The size of the result is less than <code>1MB</code>.</p> </li> <li> <p>The number of rows in the result set is less than the value of <code>maxRows</code>.</p> </li> </ul> <p>Otherwise, the initial invocation of <code>Query</code> only returns a <code>NextToken</code>, which can then be used in subsequent calls to fetch the result set. To resume pagination, provide the <code>NextToken</code> value in the subsequent command.</p> <p>If the row size is large (e.g. a row has many columns), Timestream may return fewer rows to keep the response size from exceeding the 1 MB limit. If <code>MaxRows</code> is not provided, Timestream will send the necessary number of rows to meet the 1 MB limit.</p>', ], ], 'MaxScheduledQueriesResults' => [ 'base' => NULL, 'refs' => [ 'ListScheduledQueriesRequest$MaxResults' => '<p>The maximum number of items to return in the output. If the total number of items available is more than the value specified, a <code>NextToken</code> is provided in the output. To resume pagination, provide the <code>NextToken</code> value as the argument to the subsequent call to <code>ListScheduledQueriesRequest</code>.</p>', ], ], 'MaxTagsForResourceResult' => [ 'base' => NULL, 'refs' => [ 'ListTagsForResourceRequest$MaxResults' => '<p>The maximum number of tags to return.</p>', ], ], 'MeasureValueType' => [ 'base' => NULL, 'refs' => [ 'MixedMeasureMapping$MeasureValueType' => '<p>Type of the value that is to be read from sourceColumn. If the mapping is for MULTI, use MeasureValueType.MULTI.</p>', ], ], 'MixedMeasureMapping' => [ 'base' => '<p>MixedMeasureMappings are mappings that can be used to ingest data into a mixture of narrow and multi measures in the derived table.</p>', 'refs' => [ 'MixedMeasureMappingList$member' => NULL, ], ], 'MixedMeasureMappingList' => [ 'base' => NULL, 'refs' => [ 'TimestreamConfiguration$MixedMeasureMappings' => '<p>Specifies how to map measures to multi-measure records.</p>', ], ], 'MultiMeasureAttributeMapping' => [ 'base' => '<p>Attribute mapping for MULTI value measures.</p>', 'refs' => [ 'MultiMeasureAttributeMappingList$member' => NULL, ], ], 'MultiMeasureAttributeMappingList' => [ 'base' => NULL, 'refs' => [ 'MixedMeasureMapping$MultiMeasureAttributeMappings' => '<p>Required when measureValueType is MULTI. Attribute mappings for MULTI value measures.</p>', 'MultiMeasureMappings$MultiMeasureAttributeMappings' => '<p>Required. Attribute mappings to be used for mapping query results to ingest data for multi-measure attributes.</p>', ], ], 'MultiMeasureMappings' => [ 'base' => '<p>Only one of MixedMeasureMappings or MultiMeasureMappings is to be provided. MultiMeasureMappings can be used to ingest data as multi measures in the derived table.</p>', 'refs' => [ 'TimestreamConfiguration$MultiMeasureMappings' => '<p>Multi-measure mappings.</p>', ], ], 'NextScheduledQueriesResultsToken' => [ 'base' => NULL, 'refs' => [ 'ListScheduledQueriesRequest$NextToken' => '<p> A pagination token to resume pagination.</p>', 'ListScheduledQueriesResponse$NextToken' => '<p>A token to specify where to start paginating. This is the NextToken from a previously truncated response.</p>', ], ], 'NextTagsForResourceResultsToken' => [ 'base' => NULL, 'refs' => [ 'ListTagsForResourceRequest$NextToken' => '<p>A pagination token to resume pagination.</p>', 'ListTagsForResourceResponse$NextToken' => '<p>A pagination token to resume pagination with a subsequent call to <code>ListTagsForResourceResponse</code>.</p>', ], ], 'NotificationConfiguration' => [ 'base' => '<p>Notification configuration for a scheduled query. A notification is sent by Timestream when a scheduled query is created, its state is updated or when it is deleted. </p>', 'refs' => [ 'CreateScheduledQueryRequest$NotificationConfiguration' => '<p>Notification configuration for the scheduled query. A notification is sent by Timestream when a query run finishes, when the state is updated or when you delete it. </p>', 'ScheduledQueryDescription$NotificationConfiguration' => '<p>Notification configuration.</p>', ], ], 'NullableBoolean' => [ 'base' => NULL, 'refs' => [ 'Datum$NullValue' => '<p> Indicates if the data point is null. </p>', 'PrepareQueryRequest$ValidateOnly' => '<p>By setting this value to <code>true</code>, Timestream will only validate that the query string is a valid Timestream query, and not store the prepared query for later use.</p>', 'SelectColumn$Aliased' => '<p>True, if the column name was aliased by the query. False otherwise.</p>', ], ], 'PaginationToken' => [ 'base' => NULL, 'refs' => [ 'QueryRequest$NextToken' => '<p> A pagination token used to return a set of results. When the <code>Query</code> API is invoked using <code>NextToken</code>, that particular invocation is assumed to be a subsequent invocation of a prior call to <code>Query</code>, and a result set is returned. However, if the <code>Query</code> invocation only contains the <code>ClientToken</code>, that invocation of <code>Query</code> is assumed to be a new query run. </p> <p>Note the following when using NextToken in a query:</p> <ul> <li> <p>A pagination token can be used for up to five <code>Query</code> invocations, OR for a duration of up to 1 hour – whichever comes first.</p> </li> <li> <p>Using the same <code>NextToken</code> will return the same set of records. To keep paginating through the result set, you must to use the most recent <code>nextToken</code>.</p> </li> <li> <p>Suppose a <code>Query</code> invocation returns two <code>NextToken</code> values, <code>TokenA</code> and <code>TokenB</code>. If <code>TokenB</code> is used in a subsequent <code>Query</code> invocation, then <code>TokenA</code> is invalidated and cannot be reused.</p> </li> <li> <p>To request a previous result set from a query after pagination has begun, you must re-invoke the Query API.</p> </li> <li> <p>The latest <code>NextToken</code> should be used to paginate until <code>null</code> is returned, at which point a new <code>NextToken</code> should be used.</p> </li> <li> <p> If the IAM principal of the query initiator and the result reader are not the same and/or the query initiator and the result reader do not have the same query string in the query requests, the query will fail with an <code>Invalid pagination token</code> error. </p> </li> </ul>', 'QueryResponse$NextToken' => '<p> A pagination token that can be used again on a <code>Query</code> call to get the next set of results. </p>', ], ], 'ParameterMapping' => [ 'base' => '<p>Mapping for named parameters.</p>', 'refs' => [ 'ParameterMappingList$member' => NULL, ], ], 'ParameterMappingList' => [ 'base' => NULL, 'refs' => [ 'PrepareQueryResponse$Parameters' => '<p>A list of parameters used in the submitted query string. </p>', ], ], 'PrepareQueryRequest' => [ 'base' => NULL, 'refs' => [], ], 'PrepareQueryResponse' => [ 'base' => NULL, 'refs' => [], ], 'QueryExecutionException' => [ 'base' => '<p> Timestream was unable to run the query successfully. </p>', 'refs' => [], ], 'QueryId' => [ 'base' => NULL, 'refs' => [ 'CancelQueryRequest$QueryId' => '<p> The ID of the query that needs to be cancelled. <code>QueryID</code> is returned as part of the query result. </p>', 'QueryResponse$QueryId' => '<p> A unique ID for the given query. </p>', ], ], 'QueryRequest' => [ 'base' => NULL, 'refs' => [], ], 'QueryResponse' => [ 'base' => NULL, 'refs' => [], ], 'QueryStatus' => [ 'base' => '<p>Information about the status of the query, including progress and bytes scanned.</p>', 'refs' => [ 'QueryResponse$QueryStatus' => '<p>Information about the status of the query, including progress and bytes scanned.</p>', ], ], 'QueryString' => [ 'base' => NULL, 'refs' => [ 'CreateScheduledQueryRequest$QueryString' => '<p>The query string to run. Parameter names can be specified in the query string <code>@</code> character followed by an identifier. The named Parameter <code>@scheduled_runtime</code> is reserved and can be used in the query to get the time at which the query is scheduled to run.</p> <p>The timestamp calculated according to the ScheduleConfiguration parameter, will be the value of <code>@scheduled_runtime</code> paramater for each query run. For example, consider an instance of a scheduled query executing on 2021-12-01 00:00:00. For this instance, the <code>@scheduled_runtime</code> parameter is initialized to the timestamp 2021-12-01 00:00:00 when invoking the query.</p>', 'PrepareQueryRequest$QueryString' => '<p>The Timestream query string that you want to use as a prepared statement. Parameter names can be specified in the query string <code>@</code> character followed by an identifier. </p>', 'PrepareQueryResponse$QueryString' => '<p>The query string that you want prepare.</p>', 'QueryRequest$QueryString' => '<p> The query to be run by Timestream. </p>', 'ScheduledQueryDescription$QueryString' => '<p>The query to be run.</p>', ], ], 'ResourceName' => [ 'base' => NULL, 'refs' => [ 'SelectColumn$DatabaseName' => '<p> Database that has this column.</p>', 'SelectColumn$TableName' => '<p>Table within the database that has this column. </p>', 'TimestreamConfiguration$DatabaseName' => '<p>Name of Timestream database to which the query result will be written.</p>', 'TimestreamConfiguration$TableName' => '<p>Name of Timestream table that the query result will be written to. The table should be within the same database that is provided in Timestream configuration.</p>', 'TimestreamDestination$DatabaseName' => '<p>Timestream database name. </p>', 'TimestreamDestination$TableName' => '<p>Timestream table name. </p>', ], ], 'ResourceNotFoundException' => [ 'base' => '<p>The requested resource could not be found.</p>', 'refs' => [], ], 'Row' => [ 'base' => '<p>Represents a single row in the query results.</p>', 'refs' => [ 'Datum$RowValue' => '<p> Indicates if the data point is a row. </p>', 'RowList$member' => NULL, ], ], 'RowList' => [ 'base' => NULL, 'refs' => [ 'QueryResponse$Rows' => '<p> The result set rows returned by the query. </p>', ], ], 'S3BucketName' => [ 'base' => NULL, 'refs' => [ 'S3Configuration$BucketName' => '<p> Name of the S3 bucket under which error reports will be created.</p>', 'S3ReportLocation$BucketName' => '<p> S3 bucket name. </p>', ], ], 'S3Configuration' => [ 'base' => '<p>Details on S3 location for error reports that result from running a query. </p>', 'refs' => [ 'ErrorReportConfiguration$S3Configuration' => '<p>The S3 configuration for the error reports.</p>', ], ], 'S3EncryptionOption' => [ 'base' => NULL, 'refs' => [ 'S3Configuration$EncryptionOption' => '<p> Encryption at rest options for the error reports. If no encryption option is specified, Timestream will choose SSE_S3 as default. </p>', ], ], 'S3ObjectKey' => [ 'base' => NULL, 'refs' => [ 'S3ReportLocation$ObjectKey' => '<p>S3 key. </p>', ], ], 'S3ObjectKeyPrefix' => [ 'base' => NULL, 'refs' => [ 'S3Configuration$ObjectKeyPrefix' => '<p> Prefix for the error report key. Timestream by default adds the following prefix to the error report path. </p>', ], ], 'S3ReportLocation' => [ 'base' => '<p> S3 report location for the scheduled query run.</p>', 'refs' => [ 'ErrorReportLocation$S3ReportLocation' => '<p>The S3 location where error reports are written.</p>', ], ], 'ScalarMeasureValueType' => [ 'base' => NULL, 'refs' => [ 'MultiMeasureAttributeMapping$MeasureValueType' => '<p>Type of the attribute to be read from the source column.</p>', ], ], 'ScalarType' => [ 'base' => NULL, 'refs' => [ 'Type$ScalarType' => '<p>Indicates if the column is of type string, integer, Boolean, double, timestamp, date, time. </p>', ], ], 'ScalarValue' => [ 'base' => NULL, 'refs' => [ 'Datum$ScalarValue' => '<p> Indicates if the data point is a scalar value such as integer, string, double, or Boolean. </p>', ], ], 'ScheduleConfiguration' => [ 'base' => '<p>Configuration of the schedule of the query.</p>', 'refs' => [ 'CreateScheduledQueryRequest$ScheduleConfiguration' => '<p>The schedule configuration for the query.</p>', 'ScheduledQueryDescription$ScheduleConfiguration' => '<p>Schedule configuration.</p>', ], ], 'ScheduleExpression' => [ 'base' => NULL, 'refs' => [ 'ScheduleConfiguration$ScheduleExpression' => '<p>An expression that denotes when to trigger the scheduled query run. This can be a cron expression or a rate expression. </p>', ], ], 'ScheduledQuery' => [ 'base' => '<p>Scheduled Query</p>', 'refs' => [ 'ScheduledQueryList$member' => NULL, ], ], 'ScheduledQueryDescription' => [ 'base' => '<p>Structure that describes scheduled query.</p>', 'refs' => [ 'DescribeScheduledQueryResponse$ScheduledQuery' => '<p>The scheduled query.</p>', ], ], 'ScheduledQueryList' => [ 'base' => NULL, 'refs' => [ 'ListScheduledQueriesResponse$ScheduledQueries' => '<p>A list of scheduled queries.</p>', ], ], 'ScheduledQueryName' => [ 'base' => NULL, 'refs' => [ 'CreateScheduledQueryRequest$Name' => '<p>Name of the scheduled query.</p>', 'ScheduledQuery$Name' => '<p>The name of the scheduled query.</p>', 'ScheduledQueryDescription$Name' => '<p>Name of the scheduled query.</p>', ], ], 'ScheduledQueryRunStatus' => [ 'base' => NULL, 'refs' => [ 'ScheduledQuery$LastRunStatus' => '<p>Status of the last scheduled query run.</p>', 'ScheduledQueryRunSummary$RunStatus' => '<p>The status of a scheduled query run.</p>', ], ], 'ScheduledQueryRunSummary' => [ 'base' => '<p>Run summary for the scheduled query</p>', 'refs' => [ 'ScheduledQueryDescription$LastRunSummary' => '<p>Runtime summary for the last scheduled query run. </p>', 'ScheduledQueryRunSummaryList$member' => NULL, ], ], 'ScheduledQueryRunSummaryList' => [ 'base' => NULL, 'refs' => [ 'ScheduledQueryDescription$RecentlyFailedRuns' => '<p>Runtime summary for the last five failed scheduled query runs.</p>', ], ], 'ScheduledQueryState' => [ 'base' => NULL, 'refs' => [ 'ScheduledQuery$State' => '<p>State of scheduled query. </p>', 'ScheduledQueryDescription$State' => '<p>State of the scheduled query. </p>', 'UpdateScheduledQueryRequest$State' => '<p>State of the scheduled query. </p>', ], ], 'SchemaName' => [ 'base' => NULL, 'refs' => [ 'DimensionMapping$Name' => '<p>Column name from query result.</p>', 'MixedMeasureMapping$MeasureName' => '<p>Refers to the value of measure_name in a result row. This field is required if MeasureNameColumn is provided.</p>', 'MixedMeasureMapping$SourceColumn' => '<p>This field refers to the source column from which measure-value is to be read for result materialization.</p>', 'MixedMeasureMapping$TargetMeasureName' => '<p>Target measure name to be used. If not provided, the target measure name by default would be measure-name if provided, or sourceColumn otherwise. </p>', 'MultiMeasureAttributeMapping$SourceColumn' => '<p>Source column from where the attribute value is to be read.</p>', 'MultiMeasureAttributeMapping$TargetMultiMeasureAttributeName' => '<p>Custom name to be used for attribute name in derived table. If not provided, source column name would be used.</p>', 'MultiMeasureMappings$TargetMultiMeasureName' => '<p>The name of the target multi-measure name in the derived table. This input is required when measureNameColumn is not provided. If MeasureNameColumn is provided, then value from that column will be used as multi-measure name.</p>', 'TimestreamConfiguration$TimeColumn' => '<p>Column from query result that should be used as the time column in destination table. Column type for this should be TIMESTAMP.</p>', 'TimestreamConfiguration$MeasureNameColumn' => '<p>Name of the measure column.</p>', ], ], 'SelectColumn' => [ 'base' => '<p>Details of the column that is returned by the query. </p>', 'refs' => [ 'SelectColumnList$member' => NULL, ], ], 'SelectColumnList' => [ 'base' => NULL, 'refs' => [ 'PrepareQueryResponse$Columns' => '<p>A list of SELECT clause columns of the submitted query string. </p>', ], ], 'ServiceErrorMessage' => [ 'base' => NULL, 'refs' => [ 'AccessDeniedException$Message' => NULL, ], ], 'ServiceQuotaExceededException' => [ 'base' => '<p>You have exceeded the service quota.</p>', 'refs' => [], ], 'SnsConfiguration' => [ 'base' => '<p>Details on SNS that are required to send the notification.</p>', 'refs' => [ 'NotificationConfiguration$SnsConfiguration' => '<p>Details on SNS configuration. </p>', ], ], 'String' => [ 'base' => NULL, 'refs' => [ 'CancelQueryResponse$CancellationMessage' => '<p> A <code>CancellationMessage</code> is returned when a <code>CancelQuery</code> request for the query specified by <code>QueryId</code> has already been issued. </p>', 'ColumnInfo$Name' => '<p> The name of the result set column. The name of the result set is available for columns of all data types except for arrays. </p>', 'Endpoint$Address' => '<p>An endpoint address.</p>', 'ParameterMapping$Name' => '<p>Parameter name.</p>', 'SelectColumn$Name' => '<p>Name of the column.</p>', ], ], 'StringValue2048' => [ 'base' => NULL, 'refs' => [ 'CreateScheduledQueryRequest$KmsKeyId' => '<p>The Amazon KMS key used to encrypt the scheduled query resource, at-rest. If the Amazon KMS key is not specified, the scheduled query resource will be encrypted with a Timestream owned Amazon KMS key. To specify a KMS key, use the key ID, key ARN, alias name, or alias ARN. When using an alias name, prefix the name with <i>alias/</i> </p> <p>If ErrorReportConfiguration uses <code>SSE_KMS</code> as encryption type, the same KmsKeyId is used to encrypt the error report at rest.</p>', 'ScheduledQueryDescription$KmsKeyId' => '<p>A customer provided KMS key used to encrypt the scheduled query resource.</p>', ], ], 'Tag' => [ 'base' => '<p>A tag is a label that you assign to a Timestream database and/or table. Each tag consists of a key and an optional value, both of which you define. Tags enable you to categorize databases and/or tables, for example, by purpose, owner, or environment. </p>', 'refs' => [ 'TagList$member' => NULL, ], ], 'TagKey' => [ 'base' => NULL, 'refs' => [ 'Tag$Key' => '<p>The key of the tag. Tag keys are case sensitive. </p>', 'TagKeyList$member' => NULL, ], ], 'TagKeyList' => [ 'base' => NULL, 'refs' => [ 'UntagResourceRequest$TagKeys' => '<p>A list of tags keys. Existing tags of the resource whose keys are members of this list will be removed from the Timestream resource. </p>', ], ], 'TagList' => [ 'base' => NULL, 'refs' => [ 'CreateScheduledQueryRequest$Tags' => '<p>A list of key-value pairs to label the scheduled query.</p>', 'ListTagsForResourceResponse$Tags' => '<p>The tags currently associated with the Timestream resource. </p>', 'TagResourceRequest$Tags' => '<p>The tags to be assigned to the Timestream resource.</p>', ], ], 'TagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'TagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'TagValue' => [ 'base' => NULL, 'refs' => [ 'Tag$Value' => '<p>The value of the tag. Tag values are case sensitive and can be null. </p>', ], ], 'TargetConfiguration' => [ 'base' => '<p>Configuration used for writing the output of a query.</p>', 'refs' => [ 'CreateScheduledQueryRequest$TargetConfiguration' => '<p>Configuration used for writing the result of a query.</p>', 'ScheduledQueryDescription$TargetConfiguration' => '<p>Scheduled query target store configuration.</p>', ], ], 'TargetDestination' => [ 'base' => '<p>Destination details to write data for a target data source. Current supported data source is Timestream.</p>', 'refs' => [ 'ScheduledQuery$TargetDestination' => '<p>Target data source where final scheduled query result will be written.</p>', ], ], 'ThrottlingException' => [ 'base' => '<p>The request was denied due to request throttling.</p>', 'refs' => [], ], 'Time' => [ 'base' => NULL, 'refs' => [ 'ExecuteScheduledQueryRequest$InvocationTime' => '<p>The timestamp in UTC. Query will be run as if it was invoked at this timestamp. </p>', 'ScheduledQuery$CreationTime' => '<p>The creation time of the scheduled query.</p>', 'ScheduledQuery$PreviousInvocationTime' => '<p>The last time the scheduled query was run.</p>', 'ScheduledQuery$NextInvocationTime' => '<p>The next time the scheduled query is to be run.</p>', 'ScheduledQueryDescription$CreationTime' => '<p>Creation time of the scheduled query.</p>', 'ScheduledQueryDescription$PreviousInvocationTime' => '<p>Last time the query was run.</p>', 'ScheduledQueryDescription$NextInvocationTime' => '<p>The next time the scheduled query is scheduled to run.</p>', 'ScheduledQueryRunSummary$InvocationTime' => '<p>InvocationTime for this run. This is the time at which the query is scheduled to run. Parameter <code>@scheduled_runtime</code> can be used in the query to get the value. </p>', 'ScheduledQueryRunSummary$TriggerTime' => '<p>The actual time when the query was run.</p>', ], ], 'TimeSeriesDataPoint' => [ 'base' => '<p>The timeseries data type represents the values of a measure over time. A time series is an array of rows of timestamps and measure values, with rows sorted in ascending order of time. A TimeSeriesDataPoint is a single data point in the time series. It represents a tuple of (time, measure value) in a time series. </p>', 'refs' => [ 'TimeSeriesDataPointList$member' => NULL, ], ], 'TimeSeriesDataPointList' => [ 'base' => NULL, 'refs' => [ 'Datum$TimeSeriesValue' => '<p> Indicates if the data point is a timeseries data type. </p>', ], ], 'Timestamp' => [ 'base' => NULL, 'refs' => [ 'TimeSeriesDataPoint$Time' => '<p>The timestamp when the measure value was collected.</p>', ], ], 'TimestreamConfiguration' => [ 'base' => '<p> Configuration to write data into Timestream database and table. This configuration allows the user to map the query result select columns into the destination table columns. </p>', 'refs' => [ 'TargetConfiguration$TimestreamConfiguration' => '<p>Configuration needed to write data into the Timestream database and table.</p>', ], ], 'TimestreamDestination' => [ 'base' => '<p>Destination for scheduled query.</p>', 'refs' => [ 'TargetDestination$TimestreamDestination' => '<p>Query result destination details for Timestream data source.</p>', ], ], 'Type' => [ 'base' => '<p>Contains the data type of a column in a query result set. The data type can be scalar or complex. The supported scalar data types are integers, Boolean, string, double, timestamp, date, time, and intervals. The supported complex data types are arrays, rows, and timeseries.</p>', 'refs' => [ 'ColumnInfo$Type' => '<p>The data type of the result set column. The data type can be a scalar or complex. Scalar data types are integers, strings, doubles, Booleans, and others. Complex data types are types such as arrays, rows, and others. </p>', 'ParameterMapping$Type' => NULL, 'SelectColumn$Type' => NULL, ], ], 'UntagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'UntagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateScheduledQueryRequest' => [ 'base' => NULL, 'refs' => [], ], 'ValidationException' => [ 'base' => '<p> Invalid or malformed request. </p>', 'refs' => [], ], ],];
