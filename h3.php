﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Process XML using jQuery</title>
<script src="assets/jquery-1.11.3-jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" language="javascript">
    $(document).ready(function () {
    	$("#dvContent").append("<ul></ul>");
    	$.ajax({
    		type : "GET",
    		url : "hbook.xml",
    		dataType : "xml",
    		success : function (xml) {
    			/*
    			<SPORT NAME="Horse Racing" ID="100004">
    			<EVENT NAME="UK Racing" ID="190538">
    			<SUBEVENT NAME="Huntingdon (30th May 2016)" ID="3076648" DATE="2016-05-30 00:01:00">
    			<SUBEVENT1 NAME="14:00 Huntingdon" ID="3076652" DATE="2016-05-30 14:00:00">
    			 */

    			/*
    			var horseName = $(xml).find('SELECTION').attr('NAME');
    			alert(horseName);

    			var price = $(xml).find('PRICE').attr('VALUE');
    			alert(price);
    			//-----------------------------------------------------------------------
    			$(xml).find('SELECTION').each(function(){
    			var horseName = $(this).attr('NAME');
    			var price = $(this).find('PRICE').attr('VALUE');

    			$("<li></li>").html(horseName + ", " + price).appendTo("#dvContent ul");
    			 */

    			$(xml).find('root').each(function () {

    				////////////////////////////////////////////////////////////////////////
    				// Sports Name & Sports Region
    				// (Horse Racing & UK Racing)
    				//$(xml).find('SPORT').each(function(){
    				$(this).find('SPORT').each(function () {
    					var sportsName = $(this).attr('NAME');
    					// Skip sports other than horse race
    					if ('Horse Racing' == sportsName) {
    						var eventName = $(this).find('EVENT').attr('NAME');
    						// Skip other region or country races other than UK and Irish
    						if ('UK Racing' == eventName || 'Irish Racing' == eventName) {
    							$("<li></li>").html(sportsName + ", " + eventName).appendTo("#dvContent ul");
    							$("<li></li>").html("************************************************************").appendTo("#dvContent ul");

    							///////////////////////////////////////////////////////////////////////
    							// Race Course Name & Date
    							// (14:00 Huntingdon & 2016-05-30 14:00:00)
    							// var raceCourse = $(this).find('SUBEVENT1').attr('NAME');
    							$(this).find('SUBEVENT1').each(function () {
    								$("<hr>").html("").appendTo("#dvContent ul");
    								var raceCourse = $(this).attr('NAME');
    								var date = $(this).attr('DATE');
    								$("<li></li>").html(raceCourse + ", " + date).appendTo("#dvContent ul");
    								$("<hr>").html("").appendTo("#dvContent ul");

    								////////////////////////////////////////////////////////////
    								// Horse Name & Price
    								// (7 Star Trouper & 2.64)
    								$(this).find('SELECTION').each(function () {
    									var horseName = $(this).attr('NAME');
										var price = 0.0;
										if($(this).find('PRICE').length)
										{
											price = $(this).find('PRICE').attr('VALUE').trim();
										} 									
										
    									// var price = $(this).find('PRICE').attr('VALUE');

    									$("<li></li>").html(horseName + ", " + price).appendTo("#dvContent ul");
    								}); // Horse Name & Price
    								////////////////////////////////////////////////////////////
    							}); // Race Course Name & Date
    						} // is Foreign country races ?
    					} // is horse racing ?
    				}); // Sports Name & Sports Region
    			}); // root


    			/*
    			var currLoanXml = '<company sample="text"><employee id="001" sex="M" age="20">Premshree Pillai</employee></company>';
    			var pic = $(currLoanXml).filter('company').attr('sample');
    			alert(pic);

    			var sample = $(currLoanXml).attr('sample');
    			alert(sample);

    			var pic = $(currLoanXml).find('employee').attr('id');
    			alert(pic);
    			//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    			$(xml).find('Book').each(function(){
    			var sTitle = $(this).find('Title').text();
    			var sPublisher = $(this).find('Publisher').text();
    			$("<li></li>").html(sTitle + ", " + sPublisher).appendTo("#dvContent ul");
    			});
    			 */
    		},
    		error : function () {
    			alert("An error occurred while processing XML file.");
    		}
    	});
    });
    </script >
<style type="text/css">
body
{
  font-family  : Arial;
  font-size  : 10pt;
}
</style>
</head>
<body>
    <form id="form1" runat="server">
    <div id="dvContent">
    
    </div>
    </form>
</body>
</html>
