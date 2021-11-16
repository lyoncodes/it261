<?php include 'config.php';?>
<?php include 'includes/header.php';?>

<?=$headline ?>
<img src="../assets/photos/<?=$selected_image?>" alt="<?=$photos[$i]?>">

<section>
  <div class="col-4">
    <div class="col-12 pt-0">
      <div class="card plane">
        <h1>Project Update:</h1>
        <p>My VHF Translator is underway, utilizing Raspberry Pi, Linux, Bash, and Python. I'm seeking experts in waterproofing if you know anyone...</p>
        <img src='../assets/images/rbp4.jpeg'>
      </div>
    </div>
    <div class="col-12">
      <div class="card plane">
        <h1>Fun Stuff:</h1>
        <p>I can't get enough of Teenage Engineering's Pocket Operators. They are endless fun.</p>
        <img src='../assets/images/po.png'>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card plane">
      <h1>10.27 - MLB: Braves - Astros, 9u-20</h1>
      <p>The Astros primary bats have been cold and are overdue for a big offensive night. But white hot opposing pitcher Max Fried has been the Braves' anchor all year. I like the dominant lefty to hold the 'Stros off for one more night in a defensive game that yields under 9 runs.</p>
    </div>
    <div class="card plane">
      <h1>10.27 - NBA: Portland - Memphis, MEM +3.0</h1>
      <p>Memphis feels good as an underdog against the Blazers, who have struggled immensely in their first games under new coach Chauncey Billups. Rumors swirl that Damian Lillard is playing through an injury, and the Grizzlies' Ja Morant is performing at the highest level of his young career. </p>
    </div>
    <div class="card plane">
      <h1>10.27 - NBA: LA Lakers - Oklahoma City, OKC +7</h1>
      <p>The Lakers enter the second leg of a double header without LeBron James and nursing general soreness. It will take a cohesive team effort to overcome a hungrier OKC team looking to steal an early conference game.</p>
    </div>

  </div>
</section>
<script>
  const court = document.getElementById("ball");
  court.addEventListener('animationend', () => {
    court.classList.remove('animate__bounce');
  });
  court.addEventListener('click', () => {
    court.classList.add('animate__bounce');
  });
</script>
</body>
</html>