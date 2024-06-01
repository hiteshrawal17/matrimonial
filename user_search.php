<?php
if(isset($_COOKIE["login"])){
    include_once("db.php");
    $email = $_COOKIE["login"];
    if(strlen(trim($_REQUEST["sch"])) > 0){
        $sch = trim($_REQUEST["sch"]);
        $rs = mysqli_query($conn, "select * from details where (fname LIKE '%$sch%' OR lname LIKE '%$sch%' OR code = '$sch') AND email <> '$email'");
        while($r = mysqli_fetch_array($rs)){
?>
    <div class="profile_top">
	<a href="user_profile.php?id=<?=$r["code"]?>" >
        <h2>254879</h2>
        <div class="col-sm-3 profile_left-top">
            <img src="profile/<?=$r["code"]?>.jpg" class="img-responsive" alt=""/>
        </div>
        <div class="col-sm-3">
            <ul class="login_details1">
                <li>Last Login : 5 days ago</li>
                <li><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor." More....</p></li>
            </ul>
        </div>
        <div class="col-sm-6">
            <table class="table_working_hours">
                <tbody>
                    <tr class="opened_1">
                        <td class="day_label1">First Name :</td>
                        <td class="day_value"><?=$r["fname"]?></td>
                    </tr>
                    <tr class="opened">
                        <td class="day_label1">Last Name :</td>
                        <td class="day_value"><?=$r["lname"]?></td>
                    </tr>
                    <tr class="opened">
                        <td class="day_label1">Gender :</td>
                        <td class="day_value"><?=$r["gender"]?></td>
                    </tr>
                    <tr class="opened">
                        <td class="day_label1">Caste :</td>
                        <td class="day_value"><?=$r["caste"]?></td>
                    </tr>
                    <tr class="opened">
                        <td class="day_label1">Religion :</td>
                        <td class="day_value"><?=$r["religion"]?></td>
                    </tr>
                    <tr class="opened">
                        <td class="day_label1">DOB:</td>
                        <td class="day_value"><?=$r["birth"]?></td>
                    </tr>
                    <tr class="opened">
                        <td class="day_label1" colspan="2"><a href="user_profile.php?id=<?=$r["code"]?>"><button class="btn btn-secondary">View Profile</button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="clearfix"> </div>
		</a>
    </div>

<?php
        }
    }
}
?>
