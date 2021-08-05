<!DOCTYPE html>

<html>

<head>

    <title>Bootstrap Datepicker Disable Specific Dates Example - ItSolutionStuff.com</title>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>





<style type="text/css">
    body {
  font-family: Arial;
  font-size: 10pt;
  padding: 5px;
}

.Highlighted a {
  background-color: Green !important;
  background-image: none !important;
  color: White !important;
  font-weight: bold !important;
  font-size: 12pt;
}

</style>
</head>

<body>

   

<div class="container">

    <h1>Bootstrap Datepicker Disable Specific Dates Example - ItSolutionStuff.com</h1>

    <input type="text" id="txtDate" name="tarikh" class="form-control datepicker" autocomplete="off" readonly>
    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>

</div>


<script type="text/javascript">

$(document).ready(function() {
    var SelectedDates = {};
    SelectedDates[new Date('07/07/2020')] = 'event1';
    SelectedDates[new Date('04/05/2020')] = 'event2';
    SelectedDates[new Date('07/08/2020')] = 'event3';
    SelectedDates[new Date('04/07/2014')] = 'event4';

    $('#txtDate').datepicker({
        todayBtn: "linked",
        todayHighlight: true,
        format: 'dd/mm/yyyy',
        endDate: '+0d',
        daysOfWeekDisabled: [0,6],
        beforeShowDay: function(date) {
            var Highlight = SelectedDates[date];
            if (Highlight) {
                return [true, "Highlighted", Highlight];
            }
            else {
                return [true, '', ''];
            }
        }
    });
});


</script>
</body>

</html>