<body align="center">
    <table align="center">
        <form action="update.php" method="post" >
            <?php
            include("connection.php");
            $artist_id = $_GET['artist_id'];
            $query = "select * from artist_master where artist_id='$artist_id'";
            $exe = mysql_query($query);
            $row = mysql_fetch_assoc($exe);
            ?>
            <tr>
                <td>

                    <input type="hidden" name="artist_id" value="<?php echo $row['artist_id'] ?>"/>
                    <label>First Name</label><br/>
                    <input type="text" name="first_name" value="<?php echo $row['first_name'] ?>"/><br/>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Last Name</label><br/>
                    <input type="text" name="last_name" value="<?php echo $row['last_name'] ?>"/><br/>
                </td>
            </tr>


            <tr><td>
                    <label>Gender</label><br/>
                    <select name="zender">
                        <option value="male" <?php echo $row['zender'] == 'male' ? 'selected' : ''; ?>>Male</option>
                        <option value="female" <?php echo $row['zender'] == 'female' ? 'selected' : ''; ?>>Female</option>
                    </select>
                </td></tr><br/>


            <input type="submit" value="submit">
        </form>
</body>