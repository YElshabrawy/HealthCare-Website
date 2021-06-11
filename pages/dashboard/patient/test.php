<!-- <div class="summary flex"> -->
                    <!-- <div class="l2">
                        <div class="weight flex">
                            <h2>Weight: </h2>
                            <h4 class="weight"><?php echo $Weight; ?> Kg</h4>
                        </div>
                        <div class="height flex">
                            <h2>Height: </h2>
                            <h4 class="height"><?php echo $Height; ?> Cm</h4>
                        </div>
                        <div class="ss flex">
                            <h2>Social State: </h2>
                            <h4 class="ss"><?php echo $SS; ?></h4>
                        </div>
                        <div class="age flex">
                            <h2>Age: </h2>
                            <h4 class="age"><?php echo $Age; ?></h4>
                        </div>
                        <div class="gender flex">
                            <h2>Gender: </h2>
                            <h4 class="gender">                        
                            <?php // if($sex=="M") 
                                //{echo  "Male";}
                                //else
                                //{echo  "Female";}
                                 ?></h4>
                        </div>
                        <div class="job flex">
                            <h2>Job: </h2>
                            <h4 class="job"><?php //echo $Job; ?></h4>
                        </div>
                        <div class="city flex">
                            <h2>City: </h2>
                            <h4 class="city"><?php //echo $city; ?></h4>
                        </div>
                    </div>
                    <div class="r2">
                        <div class="allergies">
                            <h2>Allergies: </h2>
                            <h4 class="allergies">
                                <?php 
                                clearStoredResults();
                                $result2 = patientHistory($ID);
                                if($result2)
                                {
                                    while($row2 = mysqli_fetch_assoc($result2)){
                                        if($row2['HistoryType'] == 1)
                                        {
                                            //echo $row2['DName'] . " - ";
                                        }
                                        }
                                    }
                            ?>
                            </h4>
                        </div>
                        <div class="chronic">
                            <h2>Chronic Diseases: </h2>
                            <h4 class="chronic">
                                <?php
                                if($result2)
                                {
                                    while($row2 = mysqli_fetch_assoc($result2)){
                                        if($row2['HistoryType'] == 2)
                                        {
                                           // echo $row2['DName'] . " - ";
                                        }
                                        }
                                    
                                }
                            ?>
                            </h4>
                        </div>
                        <div class="medicine">
                            <h2>Medicine: </h2>
                            <h4 class="medicine">
                                <?php
                                if($result2)
                                {
                                    while($row2 = mysqli_fetch_assoc($result2)){
                                        if($row2['HistoryType'] == 3)
                                        {
                                            //echo $row2['DName'] . " - ";
                                        }
                                        }
                                    
                                }
                            ?>
                            </h4>
                        </div>
                        <div class="surgery">
                            <h2>Surgerys: </h2>
                            <h4 class="surgery">
                                <?php
                                if($result2)
                                {
                                    while($row2 = mysqli_fetch_assoc($result2)){
                                        if($row2['HistoryType'] == 4)
                                        {
                                            //echo $row2['DName'] . " - ";
                                        }
                                        }
                                    
                                }
                            ?>
                            </h4>
                        </div>
                    </div> -->
                <!-- </div> -->
                <div class="complaint">
                    <div class="complaint-block">
                        <!-- <h5>Complaint:</h5> -->
                        <p class="complaint-data">
                            <?php// echo $Complaints; ?>
                        </p>
                    </div>
                    <div class="from-block">
                        <!-- <h5>Start Date:</h5> -->
                        <p class="from-data">
                            <?php //echo $StartT; ?>
                        </p>
                    </div>
                </div>
                </div>