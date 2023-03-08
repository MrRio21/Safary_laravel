;(function ($) {
	$(document).ready(function () {
		
		function get_todate(){
			var today = new Date();
			var dd = today.getDate();
			var mm = today.getMonth()+1; //January is 0!
			var yyyy = today.getFullYear();
			if(dd<10) {
				dd = '0'+dd
			} 
			if(mm<10) {
				mm = '0'+mm
			} 
			today = yyyy + '-' + mm + '-' + dd;
			return today;
		}
		
		function get_tomorrow(){
			var tomorrow = new Date(new Date().getTime() + 24 * 60 * 60 * 1000);
			var dd = tomorrow.getDate()
			var mm = tomorrow.getMonth() + 1
			var yyyy = tomorrow.getFullYear()
			if(dd<10) {
				dd = '0'+dd
			} 
			if(mm<10) {
				mm = '0'+mm
			} 
			tomorrow = yyyy + '-' + mm + '-' + dd;
			return tomorrow;
		}
		
		$('.walcf7-datetimepicker').each(function(index, element) {
			var todate = get_todate();
			var tomorrow = get_tomorrow();
			$(this).datetimepicker({
				dayOfWeekStart : 1,
				yearStart: '1900',
				lang:'en',
				format:'Y-m-d H:i',
				formatDate:'Y-m-d',
				formatTime:'H:i',
				defaultTime:'10:00',
				validateOnBlur: false,
				startDate:tomorrow,
				onGenerate: function( ct, $input ){
					$input.prop('readonly', true);
					var $this = $(this);
					$this.find('.xdsoft_date').removeClass('xdsoft_disabled');
					$this.find('.xdsoft_time').removeClass('xdsoft_disabled');
				}						
			});
		});
		
		$('.walcf7-datepicker').each(function(index, element) {
			var todate = get_todate();
			var tomorrow = get_tomorrow();
			$(this).datetimepicker({
				dayOfWeekStart : 1,
				yearStart: '1900',
				lang:'en',
				timepicker:false,
				format:'Y-m-d',
				formatDate:'Y-m-d',
				validateOnBlur: false,
				startDate:tomorrow,
				onGenerate: function( ct, $input ){
					$input.prop('readonly', true);
					var $this = $(this);
					$this.find('.xdsoft_date').removeClass('xdsoft_disabled');
					$this.find('.xdsoft_time').removeClass('xdsoft_disabled');
				}						
			});
		});
		
		$('.walcf7-timepicker').each(function(index, element) {
			$(this).datetimepicker({
				datepicker:false,
				ignoreReadonly: true,
				allowInputToggle: true,							
				format:'H:i',
				defaultTime:'10:00',
				step:15,
				validateOnBlur: false,
				onGenerate: function( ct, $input ){
					$input.prop('readonly', true);
					var $this = $(this);
					$this.find('.xdsoft_date').removeClass('xdsoft_disabled');
					$this.find('.xdsoft_time').removeClass('xdsoft_disabled');
				}
			});
		});
		
	});
}(jQuery));

