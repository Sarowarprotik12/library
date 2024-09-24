<!DOCTYPE html>
<head>
    Student Home page.
</head>
<body>
<form action="../">
<h2>Student Borrowed Books</h2>

<table boprder="1">
    <tr>
        <th>Book Title</th>
        <th>Borrow Date</th>
        <th>Return Due Date</th>
        <th>Days Left</th>
    </tr>

<?php while($r=$res-> fetch_assoc()){?
<tr>
<td><php echo $r['Book Title']?</td>
<td><php echo $r['Borrow Date']?</td>
<td><php echo $r['Return Due Date']?</td>
<td><php echo $r['Days Left']?</td>
</tr>

}
</form>
   


    </table>

</body>
</html>
