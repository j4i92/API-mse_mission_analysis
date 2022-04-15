<?php
include('connection.php');
?>
<!doctype html>
<html>
  <head>
    <title>Mission Analyst</title>
    <style type="text/css">
      body {
      	font-family: Trebuchet MS, sans-serif;
      	font-size: 15px;
      	color: #444;
      	margin-right: 24px;
      }

      h1	{
      	font-size: 25px;
      }
      h2	{
      	font-size: 20px;
      }
      h3	{
      	font-size: 16px;
      	font-weight: bold;
      }
      hr	{
      	height: 1px;
      	border: 0;
      	color: #ddd;
      	background-color: #ddd;
      }

      .app-desc {
        clear: both;
        margin-left: 20px;
      }
      .param-name {
        width: 100%;
      }
      .license-info {
        margin-left: 20px;
      }

      .license-url {
        margin-left: 20px;
      }

      .model {
        margin: 0 0 0px 20px;
      }

      .method {
        margin-left: 20px;
      }

      .method-notes	{
      	margin: 10px 0 20px 0;
      	font-size: 90%;
      	color: #555;
      }

      pre {
        padding: 10px;
        margin-bottom: 2px;
      }

      .http-method {
       text-transform: uppercase;
      }

      pre.get {
        background-color: #0f6ab4;
      }

      pre.post {
        background-color: #10a54a;
      }

      pre.put {
        background-color: #c5862b;
      }

      pre.delete {
        background-color: #a41e22;
      }

      .huge	{
      	color: #fff;
      }

      pre.example {
        background-color: #f3f3f3;
        padding: 10px;
        border: 1px solid #ddd;
      }

      code {
        white-space: pre;
      }

      .nickname {
        font-weight: bold;
      }

      .method-path {
        font-size: 1.5em;
        background-color: #0f6ab4;
      }

      .up {
        float:right;
      }

      .parameter {
        width: 500px;
      }

      .param {
        width: 500px;
        padding: 10px 0 0 20px;
        font-weight: bold;
      }

      .param-desc {
        width: 700px;
        padding: 0 0 0 20px;
        color: #777;
      }

      .param-type {
        font-style: italic;
      }

      .param-enum-header {
      width: 700px;
      padding: 0 0 0 60px;
      color: #777;
      font-weight: bold;
      }

      .param-enum {
      width: 700px;
      padding: 0 0 0 80px;
      color: #777;
      font-style: italic;
      }

      .field-label {
        padding: 0;
        margin: 0;
        clear: both;
      }

      .field-items	{
      	padding: 0 0 15px 0;
      	margin-bottom: 15px;
      }

      .return-type {
        clear: both;
        padding-bottom: 10px;
      }

      .param-header {
        font-weight: bold;
      }

      .method-tags {
        text-align: right;
      }

      .method-tag {
        background: none repeat scroll 0% 0% #24A600;
        border-radius: 3px;
        padding: 2px 10px;
        margin: 2px;
        color: #FFF;
        display: inline-block;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
  <h1>Mission Analyst</h1>
    <div class="app-desc">This is api doc for mse/mission_analyst</div>
    <div class="app-desc">More information: <a href="https://helloreverb.com">https://helloreverb.com</a></div>
    <div class="app-desc">Contact Info: <a href="jaiopenapps@gmail.com">jaiopenapps@gmail.com</a></div>
    <div class="app-desc">Version: 1.0.0</div>
    <div class="app-desc">BasePath:/NC01B/mms_mse_mission_analysis/1.0.0</div>
    <div class="license-info">Apache 2.0</div>
    <div class="license-url">http://www.apache.org/licenses/LICENSE-2.0.html</div>
  <h2>Access</h2>

  <h2><a name="__Methods">Methods</a></h2>
  [ Jump to <a href="#__Models">Models</a> ]

  <h3>Table of Contents </h3>
  <div class="method-summary"></div>
  <h4><a href="#Admins">Admins</a></h4>
  <ul>
  <li><a href="#addMissionAnalyst"><code><span class="http-method">post</span> /mms/mse/mission_analyst/insert</code></a></li>
  </ul>
  <h4><a href="#Developers">Developers</a></h4>
  <ul>
  <li><a href="#addMissionAnalyst"><code><span class="http-method">post</span> /mms/mse/mission_analyst/insert</code></a></li>
  <li><a href="#deleteMissionAnalyst"><code><span class="http-method">delete</span> /mms/mse/mission_analyst/delete</code></a></li>
  <li><a href="#searchMissionAnalyst"><code><span class="http-method">get</span> /mms/mse/mission_analyst/read</code></a></li>
  <li><a href="#updateMissionAnalyst"><code><span class="http-method">put</span> /mms/mse/mission_analyst/update</code></a></li>
  </ul>

  <h1><a name="Admins">Admins</a></h1>
  <div class="method"><a name="addMissionAnalyst"></a>
    <div class="method-path">
    <a class="up" href="#__Methods">Up</a>
    <pre class="post"><code class="huge"><span class="http-method">post</span> /mms/mse/mission_analyst/insert</code></pre></div>
    <div class="method-summary">adds an mission analyst item (<span class="nickname">addMissionAnalyst</span>)</div>
    <div class="method-notes">Adds an item to the system</div>


    <h3 class="field-label">Consumes</h3>
    This API call consumes the following media types via the <span class="header">Content-Type</span> request header:
    <ul>
      <li><code>application/json</code></li>
    </ul>

    <h3 class="field-label">Request body</h3>
    <div class="field-items">
      <div class="param">body <a href="#mission_analysis">mission_analysis</a> (optional)</div>

            <div class="param-desc"><span class="param-type">Body Parameter</span> &mdash; item to add </div>
                </div>  <!-- field-items -->





    <!--Todo: process Response Object and its headers, schema, examples -->



    <h3 class="field-label">Responses</h3>
    <h4 class="field-label">201</h4>
    item updated
        <a href="#"></a>
    <h4 class="field-label">400</h4>
    invalid input, object invalid
        <a href="#"></a>
    <h4 class="field-label">409</h4>
    an existing item already exists
        <a href="#"></a>
  </div> <!-- method -->
  <hr/>
  <h1><a name="Developers">Developers</a></h1>
  <div class="method"><a name="addMissionAnalyst"></a>
    <div class="method-path">
    <a class="up" href="#__Methods">Up</a>
    <pre class="post"><code class="huge"><span class="http-method">post</span> /mms/mse/mission_analyst/insert</code></pre></div>
    <div class="method-summary">adds an mission analyst item (<span class="nickname">addMissionAnalyst</span>)</div>
    <div class="method-notes">Adds an item to the system</div>


    <h3 class="field-label">Consumes</h3>
    This API call consumes the following media types via the <span class="header">Content-Type</span> request header:
    <ul>
      <li><code>application/json</code></li>
    </ul>

    <h3 class="field-label">Request body</h3>
    <div class="field-items">
      <div class="param">body <a href="#mission_analysis">mission_analysis</a> (optional)</div>

            <div class="param-desc"><span class="param-type">Body Parameter</span> &mdash; item to add </div>
                </div>  <!-- field-items -->





    <!--Todo: process Response Object and its headers, schema, examples -->



    <h3 class="field-label">Responses</h3>
    <h4 class="field-label">201</h4>
    item updated
        <a href="#"></a>
    <h4 class="field-label">400</h4>
    invalid input, object invalid
        <a href="#"></a>
    <h4 class="field-label">409</h4>
    an existing item already exists
        <a href="#"></a>
  </div> <!-- method -->
  <hr/>
  <div class="method"><a name="deleteMissionAnalyst"></a>
    <div class="method-path">
    <a class="up" href="#__Methods">Up</a>
    <pre class="delete"><code class="huge"><span class="http-method">delete</span> /mms/mse/mission_analyst/delete</code></pre></div>
    <div class="method-summary">delete an mission analyst item (<span class="nickname">deleteMissionAnalyst</span>)</div>
    <div class="method-notes">delete an item to the system</div>








    <!--Todo: process Response Object and its headers, schema, examples -->



    <h3 class="field-label">Responses</h3>
    <h4 class="field-label">201</h4>
    item deleted
        <a href="#"></a>
    <h4 class="field-label">400</h4>
    invalid input, object invalid
        <a href="#"></a>
    <h4 class="field-label">409</h4>
    an existing item already exists
        <a href="#"></a>
  </div> <!-- method -->
  <hr/>
  <div class="method"><a name="searchMissionAnalyst"></a>
    <div class="method-path">
    <a class="up" href="#__Methods">Up</a>
    <pre class="get"><code class="huge"><span class="http-method">get</span> /mms/mse/mission_analyst/read</code></pre></div>
    <div class="method-summary">searches mission analyst (<span class="nickname">searchMissionAnalyst</span>)</div>
    <div class="method-notes"></div>





    <h3 class="field-label">Query parameters</h3>
    <div class="field-items">
      <div class="param">searchString (optional)</div>

            <div class="param-desc"><span class="param-type">Query Parameter</span> &mdash; pass an optional search string for looking up mission_analyst </div>      <div class="param">skip (optional)</div>

            <div class="param-desc"><span class="param-type">Query Parameter</span> &mdash; number of records to skip for pagination format: int32</div>      <div class="param">limit (optional)</div>

            <div class="param-desc"><span class="param-type">Query Parameter</span> &mdash; maximum number of records to return format: int32</div>    </div>  <!-- field-items -->


    <h3 class="field-label">Return type</h3>
    <div class="return-type">
      array[<a href="#mission_analysis">mission_analysis</a>]

    </div>

    <!--Todo: process Response Object and its headers, schema, examples -->

    <h3 class="field-label">Example data</h3>
    <div class="example-data-content-type">Content-Type: application/json</div>
    <pre class="example"><code>[ {
  "mission_analysis_id" : 0,
  "created_date" : "2000-01-23T04:56:07.000+00:00",
  "mission_analysis_description" : "in nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque",
  "created_by" : 6,
  "mse_id" : 1
}, {
  "mission_analysis_id" : 0,
  "created_date" : "2000-01-23T04:56:07.000+00:00",
  "mission_analysis_description" : "in nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque",
  "created_by" : 6,
  "mse_id" : 1
} ]</code></pre>

    <h3 class="field-label">Produces</h3>
    This API call produces the following media types according to the <span class="header">Accept</span> request header;
    the media type will be conveyed by the <span class="header">Content-Type</span> response header.
    <ul>
      <li><code>application/json</code></li>
    </ul>

    <h3 class="field-label">Responses</h3>
    <h4 class="field-label">200</h4>
    search results matching criteria

    <h4 class="field-label">400</h4>
    bad input parameter
        <a href="#"></a>
  </div> <!-- method -->
  <hr/>
  <div class="method"><a name="updateMissionAnalyst"></a>
    <div class="method-path">
    <a class="up" href="#__Methods">Up</a>
    <pre class="put"><code class="huge"><span class="http-method">put</span> /mms/mse/mission_analyst/update</code></pre></div>
    <div class="method-summary">updates an mission analyst item (<span class="nickname">updateMissionAnalyst</span>)</div>
    <div class="method-notes">update an item to the system</div>


    <h3 class="field-label">Consumes</h3>
    This API call consumes the following media types via the <span class="header">Content-Type</span> request header:
    <ul>
      <li><code>application/json</code></li>
    </ul>

    <h3 class="field-label">Request body</h3>
    <div class="field-items">
      <div class="param">body <a href="#mission_analysis">mission_analysis</a> (optional)</div>

            <div class="param-desc"><span class="param-type">Body Parameter</span> &mdash; item to update </div>
                </div>  <!-- field-items -->





    <!--Todo: process Response Object and its headers, schema, examples -->



    <h3 class="field-label">Responses</h3>
    <h4 class="field-label">201</h4>
    item updated
        <a href="#"></a>
    <h4 class="field-label">400</h4>
    invalid input, object invalid
        <a href="#"></a>
    <h4 class="field-label">409</h4>
    an existing item already exists
        <a href="#"></a>
  </div> <!-- method -->
  <hr/>

  <h2><a name="__Models">Models</a></h2>
  [ Jump to <a href="#__Methods">Methods</a> ]

  <h3>Table of Contents</h3>
  <ol>
    <li><a href="#mission_analysis"><code>mission_analysis</code></a></li>
  </ol>

  <div class="model">
    <h3><a name="mission_analysis"><code>mission_analysis</code></a> <a class="up" href="#__Models">Up</a></h3>

    <div class="field-items">
      <div class="param">mission_analysis_id </div><div class="param-desc"><span class="param-type"><a href="#integer">Integer</a></span>  format: uuid</div>
<div class="param">mission_analysis_description </div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
          <div class="param-desc"><span class="param-type">example: in nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque</span></div>
<div class="param">created_date </div><div class="param-desc"><span class="param-type"><a href="#DateTime">Date</a></span>  format: date-time</div>
<div class="param">created_by </div><div class="param-desc"><span class="param-type"><a href="#integer">Integer</a></span>  format: uuid</div>
<div class="param">mse_id </div><div class="param-desc"><span class="param-type"><a href="#integer">Integer</a></span>  format: uuid</div>
<div class="param">model (optional)</div><div class="param-desc"><span class="param-type"><a href="#mission_analysis">mission_analysis</a></span>  </div>
    </div>  <!-- field-items -->
  </div>
  </body>
</html>
