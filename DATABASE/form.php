<!DOCTYPE html>
<html>
<head>
    
    <title>Form Input</title>
</head>
<body>
    <form action="data.php" method="POST">
        <table>
            <tr>
                <td>Name</td>
                <td> : </td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Enrollment Number</td>
                <td> : </td>
                <td><input type="number" name="enrno"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td> : </td>
                <td><textarea name="address" id="" cols="20" rows="5"></textarea></td>
            </tr>
            <tr>
                <td>Mobile Number</td>
                <td> : </td>
                <td><input type="number" name="mobilenumber"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td> : </td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td> : </td>
                <td>Male : <input type="radio" name="gender" value="male"> Female : <input type="radio" name="gender" value="female"></td>
            </tr>
            <tr>
                <td>Branch</td>
                <td> : </td>
                <td><select name="department">
                    <option value="Computer">Computer</option>
                    <option value="Electrical">Electrical</option>
                    <option value="BioMedical">BioMedical</option>
                    <option value="EC">EC</option>
                </select></td>
            </tr>
            <tr>
                <td>Sem</td>
                <td> : </td>
                <td>
                    Sem 1 : <input type="radio" name="sem" value="1">
                    Sem 2 : <input type="radio" name="sem" value="2">
                    Sem 3 : <input type="radio" name="sem" value="3">
                    Sem 4 : <input type="radio" name="sem" value="4">
                    Sem 5 : <input type="radio" name="sem" value="5">
                    Sem 6 : <input type="radio" name="sem" value="6">
                </td>
            </tr>
        </table>

        <input type="submit">
        </form>
</body>
</html>