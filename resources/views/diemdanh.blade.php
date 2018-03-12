
<script src="source/assets/js/vendor/jquery-2.1.4.min.js"></script>
<script>

$(document).ready(function(){
	$("#div1").hide();
	$("#div2").hide();
	$("#div3").hide();
	$("#div4").hide();
        $("input[value='4']").click(function(){
			$("#div1").show();
			$("#div2").hide();
			$("#div3").hide();
			$("#div4").hide();
        })
        $("input[value='5']").click(function(){
            $("#div1").hide();
			$("#div2").show();
			$("#div3").hide();
			$("#div4").hide();
        })
		$("input[value='6']").click(function(){
            $("#div1").hide();
			$("#div2").hide();
			$("#div3").show();
			$("#div4").hide();
        })
		$("input[value='7']").click(function(){
            $("#div1").hide();
			$("#div2").hide();
			$("#div3").hide();
			$("#div4").show();
        })
    })
</script>
<style type="text/css">
diemdanh {
	margin: 5% 35%;
}
button[type=submit]{
  margin-left: 0.5em;
  height: 2.5em;
  padding: 0.2em 1em 0.2em 2.25em;
  font-size: 3em;
  font-weight: bold;
  font-family: "Open Sans";
  text-transform: uppercase;
  color: #696666;
  background: url(https://i.imgur.com/Th606mh.png) no-repeat scroll 0.75em 0.07em transparent;
  background-size: 54px 204px;
  border-radius: 2em;
  border: 0.15em solid #dad9d7;
  cursor: pointer;
  transition: all 0.3s ease 0s;
}
button[type="submit"]:hover {
    color: #fff;
    background-color: #b4c1ef;
    border-color: #b4c1ef;
    background-position: 0.75em bottom;
    -webkit-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
button[type="submit"]:focus {
    background-position: 2em -4em;
    -webkit-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
</style>


