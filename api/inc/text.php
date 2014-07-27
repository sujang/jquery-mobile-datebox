<?php
/*
 * jQuery Mobile Framework : plugin to provide a date and time picker.
 * Copyright (c) JTSage
 * CC 3.0 Attribution.  May be relicensed without permission/notification.
 * https://github.com/jtsage/jquery-mobile-datebox
 */
/* Options Documentation */

$text = array(
	'common' => array( 'Common Options', array(
		'mode' => "Choose the mode of operation of datebox - 'datebox', 'timebox', 'calbox', 'flipbox', 'timeflipbox', 'durationbox', 'durationflipbox', or 'slidebox'",
		'lockInput' => "Lock the original input element, disallowing direct user input - i.e. force the use of the control",
		'enhanceInput' => "In internal control inputs, enhance the fields to only allow numeric input.  Handy for use in mobile, as it should pop up a numeric keypad rather than a full keyboard.  Somewhat less useful on tablet and desktop devices, as the input methods are usually identical",
		'defaultValue' => "Set the default date value, or time value.  Date should be supplied as a three element array [year, month, date] - time can be supplied as a 24hr string '15:41'",
		'showInitialValue' => "Auto-fill the input on datebox initilization - this will take into account any default value options",
		'startOffsetYears' => "Offset the start year by X number of years.  This valuye will be added to 'defaultValue' if it is supplied",
		'startOffsetMonths' => "Offset the start month by X number of months.  This valuye will be added to 'defaultValue' if it is supplied",
		'startOffsetDays' => "Offset the start day by X number of days.  This valuye will be added to 'defaultValue' if it is supplied"
	)),
	'display' => array('Display Options', array(
		'centerHoriz' => "When using datebox popup mode, force the control to center horizontally in the window rather than over the input element",
		'centerVert' => "When using datebox popup mode, force the control to center vertically in the window rather then over the input element",
		'transition' => "Transition to use on datebox popup, jqm popup, and dialog display modes",
		'useAnimation' => "Enable or disable animations - since datebox does not truly 'close' until animation is complete, this may be useful when trying to automate inputs",
		'hideInput' => "Cause the original input to be hidden on the page",
		'hideFixedToolbars' => "Hide fixed toolbars (if enabled) when the control opens.  Note this may be buggy on some platforms",
		'zindex' => "The Zindex to use for the datebox control.  If applicable, there is a full-screen overlay behind the control at zIndex-1",
		'clickEvent' => "Listener event for all non-close-action buttons in the control",
		'clickEventAlt' => "Listener event for all close-action buttons in the control",
		'resizeListener' => "Re-calculate positioning when the screen size changes - for instance when flipping from portrait to landscape mode. This only applies to datebox popup mode",
		'dialogEnable' => "Allow the use of jqm builtin dialog mode.  When not forced, dialog will be enabled when screen size is less than 400px",
		'dialogForce' => "Force datebox to always use jqm builtin dialog mode.",
		'enablePopup' => "Enable the use of jqm builtin popup mode rather than the datebox native one",
		'popupForceX' => "Force the X position of the jqm builtin popup mode. (top left corner)",
		'popupForceY' => "Force the Y position of the jqm builtin popup mode. (top left corner)",
		'popupPosition' => "Control how the jqm builtin popup mode positions.  Set to 'window' to center in the open window.  Set to an '#id' to center over that element. When set to false, allow datebox to center over the input element",
		'useModal' => "When using datebox popup mode, shade the background and force input to the control",
		'useInline' => "Show control inline in the page, negating any open and close actions",
		'useInlineBlind' => "Attach the control directly to the input element, and roll it down from there when opened",
		'useButton' => "Display an open button inside the input element that will open the control",
		'useFocus' => "Open datebox control when input element is focused (and disable button)",
		'usePlaceholder' => "Auto-fill the placeholder text from the input element's label if set to true.  Or, set to a string and it will use that text to set the placeholder",
		'useNewStyle' => "Use the 'new' style for the input element - recommended, much, much cleaner",
		'useAltIcon' => "When using 'useNewStyle', use a light colored icon instead of a dark one",
		'overrideStyleClass' => "When using 'useNewStyle', override the default icon scheme with a css class of your own.  Usefull if you need more than a single style of datebox icon - otherwise, just override the css",
	)),
	'control' => array('Control Options', array(
		'useHeader' => "",
		'useImmediate' => "",
		'useClearButton' => "",
		'useSetButton' => "",
		'useTodayButton' => "",
		'useCollapsedBut' => "",
		'rolloverMode' => "Allow rollover on a per-element basis.  i.e. - December + 1 = January of next year",
		'slen' => "",
		'flen' => "",
		'calShowDays' => "",
		'calShowWeek' => "",
		'calOnlyMonth' => "Hide the previous and next month dates in calendar view - that is, the 'overflow' dates - typically the first few days of next month, and the last few days of the previous month",
		'calWeekMode' => "When selecting a date, actually use only a single day - for instance, limit to only monday's for a payroll system of 'week beginning'",
		'calWeekModeDay' => "DAY of week to select in week mode - using a zero based array - 0=Sunday ... 6=Saturday"
	)),
	'limiting' => array('Data Limiting Options', array(
		'afterToday' => "",
		'beforeToday' => "",
		'notToday' => "",
		'maxDays' => "Only accept dates that are today + # of days in the future. (no limit on past dates)",
		'minDays' => "Only accept dates that are today - # of days in teh past. (no limit on future dates)",
		'maxYear' => "",
		'minYear' => "",
		'blackDatesRec' => "Array of arrays to recursivly disable - inner array is 3 elements: [year,month,day] where month is zero based (0=January..11=December). Use '-1' to specify 'ALL'<br />Example: disable christmas and christmas eve every year [[-1,11,24],[-1,11,25]]",
		'blackDates' => "Array of ISO dates that are not valid and should be disabled",
		'blackDays' => "Array of days (0=Sunday ... 6=Saturday) that are not valid and should be disabled",
		'enableDates' => "Array of ISO dates that are the *only* valid dates, and everything else should be disabled",
		'minHour' => "",
		'maxHour' => "",
		'validHours' => "Array of valid hours to choose (24hr based)",
		'minuteStep' => "",
		'minuteStepRound' => "Control rounding of minutes when invalid minute is entered. That is, minuteStep=5 and you enter 3 direct to the element",
		'highDays' => "Array of days to highlight, zero based (0=Sunday...6=Saturday)",
		'highDates' => "Array of ISO dates to highlight",
		'highDatesRec' => "Array of arrays to recursivly highlihgt - inner array is 3 elements: [year,month,day] where month is zero based (0=January..11=December). Use '-1' to specify 'ALL'<br />Example: higlight christmas and christmas eve every year [[-1,11,24],[-1,11,25]]",
		'highDatesAlt' => "Array of ISO dates to highlight, alternate theme",
		'calShowDateList' => "",
		'calDateList' => "Array of 2-element arrays to show in a special pick list.  Array structure is [ISO-Date, Description]",
		'durationSteppers' => ""
	)),
	'themes' => array('Theme Options', array(
		'theme' => "",
		'themeHeader' => "",
		'themeButton' => "",
		'themeInput' => "",
		'themeDateHigh' => "",
		'themeDatePick' => "",
		'themeDate' => "",
		'themeDateToday' => "",
		'themeDayHigh' => "",
		'themeDateHighAlt' => "",
		'themeDateHighRec' => "",
		'calUsePickers' => "Use month and year pickers at the top of the calendar for quicker jumping around",
		'calYearPickMin' => "Lower limit for year picker - valid options are an integer less than 1800 (will offset from current year), an integer greater than 1800 is a specific year, or 'NOW' which is today's year",
		'calYearPickMax' => "Upper limit for year picker - valid options are an integer less than 1800 (will offset from current year), an integer greater than 1800 is a specific year, or 'NOW' which is today's year",
		'calNoHeader' => "",
		'calHighToday' => "",
		'calHighPick' => "",
		'calWeekHigh' => "Desktop operation only, as mobile devices do no generate hover events",
		'calControlGroup' => "Show a full week as a collapsed control group (no double borders between dates)"
	)),
	'i18n' => array('Internationalization Options (overrideOptionName)', array(
		'setDateButtonLabel' => "",
		'setTimeButtonLabel' => "",
		'setDurationButtonLabel' => "",
		'calTodayButtonLabel' => "",
		'titleDateDialogLabel' => "Fallback when there is no associated label element",
		'titleTimeDialogLabel' => "Fallback when there is no associated label element",
		'daysOfWeek' => "",
		'daysOfWeekShort' => "",
		'monthsOfYear' => "",
		'monthsOfYearShort' => "",
		'durationLabel' => "",
		'durationDays' => "",
		'timeFormat' => "Valid options are 12 and 24",
		'headerFormat' => "",
		'tooltip' => "",
		'nextMonth' => "",
		'prevMonth' => "",
		'dateFieldOrder' => "",
		'timeFieldOrder' => "",
		'slideFieldOrder' => "",
		'dateFormat' => "",
		'useArabicIndic' => "",
		'isRTL' => "",
		'calStartDay' => "Zero based (0=Sunday...6=Saturday)",
		'clearButton' => "",
		'durationOrder' => "",
		'meridiem' => "",
		'timeOutput' => "",
		'durationFormat' => "",
		'calDateListLabel' => "",
		'calHeaderFormat' => "",
		'calTomorrowButtonLabel' => ""
	)),
	'custom' => array('CustomBox/CustomFlip Options', array(
		'customData' => "",
		'themeOptPick' => "",
		'themeOpt' => "",
		'overrideCustomSet' => "",
		'customDefault' => "",
	)),
	'callback' => array('Callback Options', array(
		'openCallback' => "",
		'openCallbackArgs' => "Note that 'this' in your function is the widget.  argument[0] is the date object, this starts ar argument[1]",
		'closeCallback' => "",
		'closeCallbackArgs' => "Note that 'this' in your function is the widget.  argument[0] is the date object, this starts ar argument[1]"
	)),
	'public' => array('Public Functions', array(
		'open' => "<b>Usage</b>: $(input).datebox('open');",
		'close' => "<b>Usage</b>: $(input).datebox('close');",
		'disable' => "<b>Usage</b>: $(input).datebox('disable');",
		'enable' => "<b>Usage</b>: $(input).datebox('enable');",
		'refresh' => "<b>Usage</b>: $(input).datebox('refresh');",
		'getTheDate' => "<b>Usage</b>: $(input).datebox('getTheDate');<br><br><b>Returns</b>: a javascript date object",
		'setTheDate' => "<b>Usage</b>: $(input).datebox('setTheDate', &lt;date>);<br><br><b>Expects</b>: a javascript date object",
		'getLastDur' => "<b>Usage</b>: $(input).datebox('getLastDur');<br><br><b>Returns</b>: an integer of seconds",
		'{}' => "<b>Usage</b>: $(input).datebox({&lt;opt>:&lt;value>});<br><br><b>Expects</b>: a named option, and it's new value",
		'getOption' => "<b>Usage</b>: $(input).datebox('getOption', &lt;opt>);<br><br><b>Expects</b>: a named option<br><br><b>Returns</b>: that objects value",
		'callFormat' => "<b>Usage</b>: $(input).datebox('callFormat', &lt;format>, &lt;date>);<br><br><b>Expects</b>: a string format representation and a javascript date object<br><br><b>Returns</b>: a string of the date",
		'applyMinMax' => "<b>Usage</b>: $(input).datebox('applyMinMax');",
	)),
	'event' => array("'datebox' Listener Events (method)", array(
		'open' => "This trigger will open the datebox control<br><br><b>Usage</b>: $(input).trigger('datebox', {'method':'open'})",
		'close' => "This trigger will close the datebox control<br><br><b>Usage</b>: $(input).trigger('datebox', {'method':'close'})",
		'set' => "<h3>Send</h3>This trigger will set the datebox value.  It will not automatically call the refresh method. Functionally similar to the 'setTheDate' function, however this function expects a formatted date string, not a javascript date object.  The same as setting the input value and then calling 'change' on the input<br><br><b>Usage</b>: $(input).trigger('datebox', {'method':'set', 'value': &lt;date string>})<br><br><b>Expects</b>: <em>'value'</em>: A formatted date string (format to match the current output format)<br><br><br><h3>Recieve</h3>This trigger is also reciceved when the datebox control sets a value.  It contains both a formatted date, and a javascript date object.<br><br><b>Usage</b>: <pre class='prettyprint'>$(input).bind('datebox', function (e, passed) { \n  if ( passed.method === 'set' ) {\n    alert('Formatted value is: ' + passed.value);\n    alert('JavaScript Date object is: ' + passed.date);\n  }\n});</pre><b>Returns</b>: <em>'value'</em>: Formatted date string<br><b>Returns</b>: <em>'date'</em>: Javascript date object",
		'doset' => "This trigger will refresh / populate the value of the original input<br><br><b>Usage</b>: $(input).trigger('datebox', {'method':'doset'})",
		'doclear' => "This trigger will clear the value of the original input<br><br><b>Usage</b>: $(input).trigger('datebox', {'method':'doclear'})",
		'dorefresh' => "This trigger will refresh the datebox control.  Functionally equivalent to the public refresh function<br><br><b>Usage</b>: $(input).trigger('datebox', {'method':'dorefresh'})",
		'dooffset' => "This trigger will change the internal date of datebox.  Functionally identical to hitting a +/- button in the controll, or sliding/flipping a value<br><br><b>Usage</b>: $(input).trigger('datebox', {'method':'dooffset', 'amount': &lt#>, 'type': &lt;field>})<br><br><b>Expects</b>: <em>'amount'</em>: The amount of offset, typically +/-1<br><b>Expects</b>: <em>'type'</em>: Field to change, where y=Year, m=Month, d=Date, h=Hour, i=Minute, s=Second, a=Meridian (AM/PM)",
		'enable' => "This trigger is recieved when the dateox control is enabled.<br><br><b>Usage</b>: <pre class='prettyprint'>$(input).bind('datebox', function (e, passed) { \n  if ( passed.method === 'enable' ) {\n    alert('Datebox was enabled!');\n  }\n});</pre>",
		'disable' => "This trigger is recieved when the dateox control is disabled.<br><br><b>Usage</b>: <pre class='prettyprint'>$(input).bind('datebox', function (e, passed) { \n  if ( passed.method === 'disable' ) {\n    alert('Datebox was disabled!');\n  }\n});</pre>",
		'refresh' => "This trigger is recieved when the dateox control is refreshed.<br><br><b>Usage</b>: <pre class='prettyprint'>$(input).bind('datebox', function (e, passed) { \n  if ( passed.method === 'refresh' ) {\n    alert('Datebox was refreshed!');\n  }\n});</pre>",
		'clear' => "This trigger is recieved when the dateox control is cleared.<br><br><b>Usage</b>: <pre class='prettyprint'>$(input).bind('datebox', function (e, passed) { \n  if ( passed.method === 'clear' ) {\n    alert('Datebox was cleared!');\n  }\n});</pre>",
		'offset' => "This trigger is recieved when the dateox control is changed.<br><br><b>Usage</b>: <pre class='prettyprint'>$(input).bind('datebox', function (e, passed) { \n  if ( passed.method === 'offset' ) {\n    alert('Field offset: ' + passed.type);\n    alert('Offset amount: ' + passed.amount);\n  }\n});</pre><br><br><b>Returns</b>: <em>'amount'</em>: Amount of offset, an integer<br><b>Returns</b>: <em>'type'</em>: Field changed, where y=Year, m=Month, d=Date, h=Hour, i=Minute, s=Second, a=Meridian (AM/PM)",
	))
	/*
	Trigger to open datebox

{'method'} === open

Trigger to close datebox

{'method'} === close

Trigger to set specified date

{'method'} === set
{'value'} === value to place in input
{'date'} === the date object being used

Trigger to refresh input date

{'method'} === doset

Trigger to clear input field

{'method'} === doclear

Trigger to refresh

Note: Not used interaly.
{'method'} === dorefresh

Trigger to change date

Note: Not used interaly.
{'method'} === dooffset
{'amount'} === Amount of change (usually +/- 1)
{'type'} === Type of change ( 'y' = Year, 'm' = Month, 'd' = Date, 'h' = Hour, 'i' = Minute, 's' = Second, 'a' = Meridian )

Event Payloads - Action causes trigger
Triggered on datebox enable

{'method'} === enable

Triggered on datebox disable

{'method'} === disable

Triggered on every data refresh

{'method'} === refresh

Triggered on clear button click

{'method'} === clear

Triggered on date change

{'method'} === offset
{'amount'} === Amount of change (usually +/- 1)
{'type'} === Type of change ( 'y' = Year, 'm' = Month, 'd' = Date, 'h' = Hour, 'i' = Minute, 's' = Second, 'a' = Meridian )
* */
);
?>
