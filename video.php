
<!DOCTYPE html>
<html>
	<head>
		<title>Min Width Max Width</title>
		<style type="text/css">
			body {
				font-family: Arial, Verdana, sans-serif;
				color: #111111;}
			th {
				border-bottom: 1px solid #0088dd; 
				text-align: left; 
				color: #0088dd;
				font-weight: 900;}
			td {
				min-width: 150px;
				min-height: 200px;
				vertical-align: top;
				line-height: 1.4em;}
			td.description {
				min-width: 550px;
				max-width: 750px;
				text-align: left;
				padding: 5px;
				margin: 0px;}
			</style>
	</head>
	<body>
		<table>
			<tr>
				<th>Photo</th>
				<th>Description</th>
				<th>Links</th>
			</tr>
			<tr>
				<td><img src="/images/stress.jpg" width="300" height="200" /></td>
				<td class="description"><font size="+3"> Manage stress videos</td>
				<td> 
				<p>
					<a href="https://www.youtube.com/playlist?list=PLZzQLFVTr5x2f3vr9WOd8wTktBWBF2Arl" target="_blank"><font size="+3">Link1</a> (opens Youtube videos in a new window)
				</p>
				</td>
			</tr>
			<tr>
				<td><img src="/images/todo.jpg" width="300" height="200"/></td>
				<td class="description"><font size="+3"><font size="+3">Organize videos</td>
				<td> 
				<p>
					<a href="http://www.imdb.com" target="_blank"><font size="+3">Link2</a> (opens Youtube videos in a new window)
				</p>
				</td>
			</tr>
			<tr>
				<td><img src="/images/procrastination.jpg" width="300" height="200"/></td>
				<td class="description"><font size="+3">Procrastination videos</td>
				<td> 
				<p>
					<a href="https://www.youtube.com/playlist?list=PLZzQLFVTr5x1G3eByRTcKgvZQS5bLhqtJ" target="_blank"><font size="+3">Link3</a> (opens Youtube videos in a new window)
				</p>
				</td>
			</tr>
		</table>
	</body>
</html>
