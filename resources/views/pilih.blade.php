<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="/tes2" method="POST">
	@csrf
	<input type="checkbox" name="cb[]" value="aa">aa
	<input type="checkbox" name="cb[]" value="bb">bb
	<input type="checkbox" name="cb[]" value="cc">cc
	<input type="checkbox" name="cb[]" value="dd">dd
<br>
	aa<input type="radio" name="rd1" onclick="tambah('aa');">
	<input type="radio" name="rd1" onclick="hapus('aa');">

	bb<input type="radio" name="rd2" onclick="tambah('bb');">
	<input type="radio" name="rd2" onclick="hapus('bb');">

	cc<input type="radio" name="rd3" onclick="tambah('cc');">
	<input type="radio" name="rd3" onclick="hapus('cc');">

	dd<input type="radio" name="rd4" onclick="tambah('dd');">
	<input type="radio" name="rd4" onclick="hapus('dd');">
<br>
<input type="text" name="rd5[]" id="rd5" width="">
<button type="submit">opopop</button>

</form>
<script src="{{asset('tampilan/js/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript">
	var xx =[];

	function tambah(e) {
		xx.push(e);
		document.getElementById('rd5').value=xx;
		console.log(xx);
	}
	function hapus(e) {
		xx.pop(e);
		document.getElementById('rd5').value=xx;
		console.log(xx);
	}
</script>
</body>
</html> 