 <button class="tablink" onclick="openPage('anticipe', this, '#26a7eb')" id="defaultOpen">Anticipée</button>
<button class="tablink" onclick="openPage('invalidite', this, '#26a7eb')">D'invalidité</button>
<button class="tablink" onclick="openPage('vielliesse', this, '#26a7eb')">Vielliesse</button>
<button class="tablink" onclick="openPage('rachat', this, '#26a7eb')">Vielliesse avec rachat</button>
<button class="tablink" onclick="openPage('survivant', this, '#26a7eb')">Survivant</button>

<div id="anticipe" class="tabcontent ">
 <form class="" >
 	<label for="country" class="simul ">Choisir la moyenne des 36 ou 60 derniers  mois de salaires</label>
  <select id="moyenne" name="moyenne" class="mb-5">
    <option value="36">36</option>
    <option value="60">60</option>
    
  </select>
  <label for="fname" class="simul">Salaire soumis à la cotisation</label>
  <input type="text" id="salaire" name="firstname" placeholder="Salaire soumis à la cotisation" class="">


  

  

  <input type="submit" value="Evaluer" id="simulateur">
</form>
<p id=""></p>
</div>

<div id="invalidite" class="tabcontent">
  <form action="/action_page.php">
  <label for="country" class="simul">Choisir la moyenne des 36 ou 60 derniers salaires</label>
  <select id="country" name="country">
    <option value="australia">36</option>
    <option value="canada">60</option>
    
  </select>
  <label for="fname">Salaire soumis à la cotisation</label>
  <input type="text" id="fname" name="firstname" placeholder="Salaire soumis à la cotisation">


  

  <input type="submit" value="Evaluer">
</form>
</div>

<div id="vielliesse" class="tabcontent">
  <form action="/action_page.php">
  <label for="country" class="simul">Choisir la moyenne des 36 ou 60 derniers salaires</label>
  <select id="country" name="country">
    <option value="australia">36</option>
    <option value="canada">60</option>
    
  </select>
  <label for="fname">Salaire soumis à la cotisation</label>
  <input type="text" id="fname" name="firstname" placeholder="Salaire soumis à la cotisation">


 

  <input type="submit" value="Evaluer">
</form>
</div>

<div id="rachat" class="tabcontent">
  <form action="/action_page.php">
  <label for="country" class="simul">Choisir la moyenne des 36 ou 60 derniers salaires</label>
  <select id="country" name="country">
    <option value="australia">36</option>
    <option value="canada">60</option>
    
  </select>
  <label for="fname">Salaire soumis à la cotisation</label>
  <input type="text" id="fname" name="firstname" placeholder="Salaire soumis à la cotisation">

  <label for="lname">Last Name</label>
  <input type="text" id="lname" name="lastname" placeholder="Your last name..">

  

  <input type="submit" value="Evaluer"><i class="fa fa-lg fa-long-arrow-right"></i>
</form>
</div> 

<div id="survivant" class="tabcontent">
  <form action="/action_page.php">
  <label for="country" class="simul">Choisir la moyenne des 36 ou 60 derniers salaires</label>
  <select id="country" name="country">
    <option value="australia">36</option>
    <option value="canada">60</option>
    
  </select>
  <label for="fname">Salaire soumis à la cotisation</label>
  <input type="text" id="fname" name="firstname" placeholder="Salaire soumis à la cotisation">

  <label for="lname">Last Name</label>
  <input type="text" id="lname" name="lastname" placeholder="Your last name..">

  

  <input type="submit" value="Evaluer"><i class="fa fa-lg fa-long-arrow-right"></i>
</form>
</div>
