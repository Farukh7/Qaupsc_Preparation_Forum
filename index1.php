<?php 

include('dbcon.php');


?>
<style>body {
  font-family: sans-serif;
  background: #1d1e22;
  margin: 24px;
}
.tabs {
  margin: 24px 0;
  max-width: 800px;
}
.tabRow a, .tabRow a:hover {
  text-decoration: none;
}
.tabRow ul {
  margin: 0 0 -1px;
  padding: 0;
  list-style-type: none;
  overflow: hidden;
}
.tabContainer {
  background: aliceblue;
  border: 1px solid silver;
  min-height: 200px;
  margin: -1px 0 0;
  border-radius: 3px;
  border-top-left-radius: 0;
}
.tabContent {
  padding: 12px;
  background-color: wheat;
}
.tab {
  color: gray;
  border: 1px solid silver;
  background: white;
  border-left: none;
  text-decoration: none;
  cursor: pointer;
  float: left;
  padding: 12px;
  -webkit-user-select: none; /* Safari */
  -ms-user-select: none; /* IE 10 and IE 11 */
  user-select: none; /* Standard syntax */
}
.tab:hover {
  color: dodgerblue;
}
.tab.active {
  color: dodgerblue;
  background: aliceblue;
  border-bottom: none;
  padding-bottom: 13px;
}
.tab:nth-child(1) {
  border-left: 1px solid silver;
  border-top-left-radius: 3px;
}
.tab:nth-last-child(1) {
  border-top-right-radius: 3px;
}

#tabs1{
  max-width:600px;
}
#tabs2{
  max-with:600px;
  margin-top: 25px;
  margin-left: 15px;
}
#tabs3{
  max-width: 600px;
}
#tabs4{
  max-width: 700px;
  margin-top: 40px;
  margin-left: 15px;
}
.flex-container {
  display: flex;
  flex-wrap: wrap;
  background-color: white;
}
.tabContainer{
  max-width: 600px;
}

</style>

<script>addEventListener('DOMContentLoaded', (event) => {

  function showTabs(ids, index) {

      // Convert ids to array if needed
    if ( Array.isArray(ids) == false ) {
      ids = new Array(ids);
    }
      // For each tab container there is
    ids.forEach( ( id ) => {

      let container = document.getElementById(id);

      if ( container ) {

        let tabs = container.querySelectorAll( ".tab" );
        let tabContents = container.querySelectorAll( ".tabContent" );

          // If tabs and contents count differs, we want smaller number, otherwise we run out of bounds.
        let maxIterate = Math.min(tabs.length, tabContents.length);
          //console.log(maxIterate);

          // If selected tab has bigger nuber than we can give
        index = index > maxIterate ? maxIterate : index;

        for ( let i = 0; i < maxIterate; i++ ) {
          let tab = tabs[i];
          let content = tabContents[i];

          tab.classList.remove("active");
          content.style.display = "none";
          content.style.visibility = "hidden";

          tabs[i].onclick = function() { showTabs(id, i) };

          if ( i == index ) {
            tab.classList.add("active");
            content.style.display = "block";
            content.style.visibility = "visible";
          }
        }
      }
    });
  }
  showTabs("tabs1", 0);
  showTabs(["tabs2", "tabs3","tabs4"], 0);
  
});
</script>
<body>
 <div class="flex-container">
  <div id="tabs1" class="tabs">
    <div class="tabRow"> 
      <h3>GS PAPER-1</h3>
      <ul>
        <li class="tab" id="Topic1">TOPIC 1</li>
        <li class="tab" id="Topic2">TOPIC 2</li>
        <li class="tab" id="Topic3">TOPIC 3</li>
        <li class="tab" id="Topic4">TOPIC 4</li>
        <li class="tab" id="Topic5">TOPIC 5</li>
        <li class="tab" id="Topic6">TOPIC 6</li>
        <!-- if you have more tabs than content containers then tab is just unclickable -->
      </ul>
    </div>

    <div class="tabContainer">
      <!-- Content without .tabContent class on top of list will be visible in all tabs -->
      <div id="Topic1" class="tabContent"  style="overflow-y: auto; height: 400px;" >

        <h3 style="text-align: center;"> Modern Indian History</h3>
        <?php
        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-1' AND subject_name='Modern Indian History' AND chapter_id='6' ");           
        while($fetch=mysqli_fetch_array($sql)){
          extract($fetch);           
          ?>

          <a href="question.php?id=6"><p>
            <?php echo $chapter_question ?>
          </p></a>
        <?php } ?>
      </div>






      <div id="Topic2" class="tabContent"  style="overflow-y: auto; height: 400px;" >
        <h3 style="text-align: center;"> History of the world</h3>
        <?php 

        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-1' AND subject_name='History of the world' AND chapter_id='9' ");

        while($fetch=mysqli_fetch_array($sql)){

          extract($fetch);

          ?>

          <a href="question.php?id=9"><span>  <p width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>

      <div id="Topic4" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Physical Geography</h3>
        <?php 

        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-1' AND subject_name='Physical Geography' AND chapter_id='22' ");

        while($fetch=mysqli_fetch_array($sql)){

          extract($fetch);

          ?>



          <a href="question.php?id=22"><span><p width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>

      <div id="Topic5" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Geophysical phenomena and Changes</h3>
        <?php 

        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-1' AND subject_name='Geophysical phenomena and Changes' AND chapter_id='25' ");

        while($fetch=mysqli_fetch_array($sql)){

          extract($fetch);

          ?>



          <a href="question.php?id=25"><span><p width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>

      <div id="Topic6" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Art Culture & Heritage</h3>
        <?php 

        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-1' AND subject_name='Art Culture & Heritage' AND chapter_id='118' ");

        while($fetch=mysqli_fetch_array($sql)){

          extract($fetch);

          ?>



          <a href="question.php?id=118"><p width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></a>
        <?php } ?>
      </div>







      <div id="Topic3" class="tabcontent"   style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Indian Society</h3>
        <?php 

        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-1' AND subject_name='Indian Society' AND chapter_id='16' ");

        while($fetch=mysqli_fetch_array($sql)){

          extract($fetch);

          ?>



          <a href="question.php?id=16"><span><p width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>

    </div>

  </div>
  
  <!-- if you have more content conatainers, then these will be visible in all tabs -->



  <div id="tabs2" class="tabs">
    <div class="tabRow">
      <h3>GS-PAPER-2</h3>
      <ul>
        <li class="tab" id="Topic7">Topic 7</li>
        <li class="tab" id="Topic8">Topic 8</li>
        <li class="tab" id="Topic9">Topic 9</li>
        <li class="tab" id="Topic10">Topic 10</li>
        <li class="tab" id="Topic11">Topic 11</li>
        <li class="tab" id="Topic12">Topic 12</li>
      </ul>
    </div>
    <div class="tabContainer">
      <div id="Topic7" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Indian Constitution</h3>
        <?php
        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-2' AND subject_name='Indian Constitution' AND chapter_id='30' ");           
        while($fetch=mysqli_fetch_array($sql)){
          extract($fetch);           
          ?>

          <a href="question.php?id=30"><span> <p width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>

      <div id="Topic8" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Functions and Responsibilities of Authorities</h3>
        <?php
        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-2' AND subject_name='Functions and Responsibilities of Authorities' AND chapter_id='37' ");           
        while($fetch=mysqli_fetch_array($sql)){
          extract($fetch);           
          ?>

          <a href="question.php?id=37"><span> <p width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>


      <div id="Topic9" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Parliament and State Legislatures</h3>
        <?php
        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-2' AND subject_name='Parliament and State Legislatures' AND chapter_id='42' ");           
        while($fetch=mysqli_fetch_array($sql)){
          extract($fetch);           
          ?>

          <a href="question.php?id=42"><span> <p width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>

      <div id="Topic10" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Indian Governance</h3>
        <?php
        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-2' AND subject_name='Indian Governance' AND chapter_id='46' ");           
        while($fetch=mysqli_fetch_array($sql)){
          extract($fetch);           
          ?>

          <a href="question.php?id=46"><span> <p width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>
      <div id="Topic11" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Social Sector</h3>
        <?php
        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-2' AND subject_name='Social Sector' AND chapter_id='57' ");           
        while($fetch=mysqli_fetch_array($sql)){
          extract($fetch);           
          ?>

          <a href="question.php?id=57"><span> <p width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>

      <div id="Topic12" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">International Relations</h3>
        <?php
        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-2' AND subject_name='International Relations' AND chapter_id='61' ");           
        while($fetch=mysqli_fetch_array($sql)){
          extract($fetch);           
          ?>

          <a href="question.php?id=61"><span> <p width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>
    </div>
  </div>

</div>



<!-- Third tab container -->
<div class="flex-container">
  <div id="tabs3" class="tabs">
    <div class="tabRow">
      <h3>GS-PAPER-3</h3>
      <ul>
        <li class="tab" id="Topic13">Topic 13</li>
        <li class="tab" id="Topic14">Topic 14</li>
        <li class="tab" id="Topic15">Topic 15</li>
        <li class="tab" id="Topic16">Topic 16</li>
        <li class="tab" id="Topic17">Topic 17</li>
        <li class="tab" id="Topic18">Topic 18</li>
      </ul>
    </div>
    <div class="tabContainer">
      <div id="Topic13" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Indian Economy</h3>
        <?php
        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-3' AND subject_name='Indian Economy' AND chapter_id='64' ");           
        while($fetch=mysqli_fetch_array($sql)){
          extract($fetch);           
          ?>

          <a href="question.php?id=64"><span> <p width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>
      <div id="Topic14" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Agriculture Sector</h3>
        <?php
        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-3' AND subject_name='Agriculture Sector' AND chapter_id='70' ");           
        while($fetch=mysqli_fetch_array($sql)){
          extract($fetch);           
          ?>

          <a href="question.php?id=70"><span> <p width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>
      <div id="Topic15" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Food Sector</h3>
        <?php
        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-3' AND subject_name='Food Sector' AND chapter_id='75' ");           
        while($fetch=mysqli_fetch_array($sql)){
          extract($fetch);           
          ?>

          <a href="question.php?id=75"><span> <p width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>
      <div id="Topic16" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Science & Technology (S&T)</h3>
        <?php
        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-3' AND subject_name='Science & Technology (S&T)' AND chapter_id='80' ");           
        while($fetch=mysqli_fetch_array($sql)){
          extract($fetch);           
          ?>

          <a href="question.php?id=80"><span> <p width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>

      <div id="Topic17" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Disaster Management</h3>
        <?php
        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-3' AND subject_name='Disaster Management' AND chapter_id='84' ");           
        while($fetch=mysqli_fetch_array($sql)){
          extract($fetch);           
          ?>

          <a href="question.php?id=84"><span> <p width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>
      <div id="Topic18" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Security issues in India</h3>
        <?php
        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-3' AND subject_name='Security issues in India' AND chapter_id='88' ");           
        while($fetch=mysqli_fetch_array($sql)){
          extract($fetch);           
          ?>

          <a href="question.php?id=88"><span> <p width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>
    </div>
  </div>
  <div>
    <div id="tabs4" class="tabs">
      <div class="tabRow">
        <h3>GS-PAPER-4</h3>
        <ul>
          <li class="tab" id="Topic19">Topic 19</li>
          <li class="tab" id="Topic20">Topic 20</li>
          <li class="tab" id="Topic21">Topic 21</li>
          <li class="tab" id="Topic22">Topic 22</li>
          <li class="tab" id="Topic23">Topic 23</li>
          <li class="tab" id="Topic24">Topic 24</li>
        </ul>
      </div>
      <div class="tabContainer">

        <div id="Topic19" class="tabcontent"  style="overflow-y: auto; height: 400px;">
          <h3 style="text-align: center;">Ethics and Human Interface</h3>
          <?php
          $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-4' AND subject_name='Ethics and Human Interface' AND chapter_id='92' ");           
          while($fetch=mysqli_fetch_array($sql)){
            extract($fetch);           
            ?>

            <a href="question.php?id=92"><span> <p width="100%" direction="up" height="100px">
              <?php echo $chapter_question ?>
            </p></span></a>
          <?php } ?>
        </div>
        <div id="Topic20" class="tabcontent"  style="overflow-y: auto; height: 400px;">
          <h3 style="text-align: center;">Attitude</h3>
          <?php
          $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-4' AND subject_name='Attitude' AND chapter_id='97' ");           
          while($fetch=mysqli_fetch_array($sql)){
            extract($fetch);           
            ?>

            <a href="question.php?id=97"><span> <p width="100%" direction="up" height="100px">
              <?php echo $chapter_question ?>
            </p></span></a>
          <?php } ?>
        </div>
        <div id="Topic21" class="tabcontent"  style="overflow-y: auto; height: 400px;">
          <h3 style="text-align: center;">Ethics in Public Administration</h3>
          <?php
          $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-4' AND subject_name='Ethics in Public Administration' AND chapter_id='101' ");           
          while($fetch=mysqli_fetch_array($sql)){
            extract($fetch);           
            ?>

            <a href="question.php?id=101"><span> <p width="100%" direction="up" height="100px">
              <?php echo $chapter_question ?>
            </p></span></a>
          <?php } ?>
        </div>
        <div id="Topic22" class="tabcontent"  style="overflow-y: auto; height: 400px;">
          <h3 style="text-align: center;">Probity in Governance</h3>
          <?php
          $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-4' AND subject_name='Probity in Governance' AND chapter_id='110' ");           
          while($fetch=mysqli_fetch_array($sql)){
            extract($fetch);           
            ?>

            <a href="question.php?id=110"><span> <p width="100%" direction="up" height="100px">
              <?php echo $chapter_question ?>
            </p></span></a>
          <?php } ?>
        </div>
        <div id="Topic23" class="tabcontent"  style="overflow-y: auto; height: 400px;">
          <h3 style="text-align: center;">Contributions of moral thinkers and philosophers from India and world</h3>
          <?php
          $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-4' AND subject_name='Contributions of moral thinkers and philosophers from India and world' AND chapter_id='119' ");           
          while($fetch=mysqli_fetch_array($sql)){
            extract($fetch);           
            ?>

            <a href="question.php?id=88"><span> <p width="100%" direction="up" height="100px">
              <?php echo $chapter_question ?>
            </p></span></a>
          <?php } ?>
        </div>
        <div id="Topic24" class="tabcontent"  style="overflow-y: auto; height: 400px;">
          <h3 style="text-align: center;">Case Studies</h3>
          <?php
          $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-4' AND subject_name='Case Studies' AND chapter_id='120' ");           
          while($fetch=mysqli_fetch_array($sql)){
            extract($fetch);           
            ?>

            <a href="question.php?id=120"><span> <p width="100%" direction="up" height="100px">
              <?php echo $chapter_question ?>
            </p></span></a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>
</body>
</html>
