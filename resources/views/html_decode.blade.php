<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CWZ | Create Document</title>
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script> -->
	<script src="{{asset('tinymce/tinymce.min.js')}}"></script>
	<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
</head>
<body>
    <form method="post" action="{{URL::to('html-decode')}}">
    	@csrf
    <textarea name="editor" id="editor" rows="10" cols="80">
    	
    </textarea>
    <input type="submit" name="submit" value="SUBMIT">
</form>


<script>
CKEDITOR.replace('editor');
</script>

</body>
</html>