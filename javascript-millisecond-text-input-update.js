
<input type="text" class="js_millisecond_update" />

<script>

    function ms()
    {
        return new Date().getTime();
    }

	function js_millisecond_update(t)
	{
		setInterval(function()
		{

			var elements = document.getElementsByClassName("js_millisecond_update");

			for(var i = elements.length - 1; i >= 0; --i)
			{
				elements[i].value = ms();
			}

		},t);
	}

    // Set to 1 milliseconds; Not suitable for all systems, experiment with the difference. 
    js_millisecond_update(1);

</script>

