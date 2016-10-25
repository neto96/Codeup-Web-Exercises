<h1>ADD A NEW PARK</h1>
<form name="add_park" method="post">
    <table width="450px">
        </tr>
        <tr>
            <td valign="top">
                <label for="first_name">Park Name *</label>
            </td>
            <td valign="top">
                <input  type="text" name="name" maxlength="100" size="40">
            </td>
        </tr>

        <tr>
            <td valign="top"">
            <label for="last_name">Location *</label>
            </td>
            <td valign="top">
                <input  type="text" name="location" maxlength="100" size="40">
            </td>
        </tr>
        <tr>
            <td valign="top">
                <label for="email">Date Established *</label>
            </td>
            <td valign="top">
                <input  type="text" name="date_established" maxlength="80" size="40">
            </td>

        </tr>
        <tr>
            <td valign="top">
                <label for="telephone">Area (In Acres) *</label>
            </td>
            <td valign="top">
                <input  type="text" name="area_in_acres" maxlength="30" size="40">
            </td>
        </tr>
        <tr>
            <td valign="top">
                <label for="comments">Description *</label>
            </td>
            <td valign="top">
                <textarea  name="description" maxlength="1000" cols="25" rows="6"></textarea>
            </td>

        </tr>
        <tr>
            <td colspan="2" style="text-align:center">
                <input type="submit" value="Submit">
            </td>
        </tr>
    </table>
</form>