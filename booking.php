

<form>
  <h1 class="form-title">Booking Form</h1>
  <label for="origin">Origin:</label>
  <select id="originsel" name="origin">
      <option value="New York">CAGAYAN DE ORO CITY</option>
      <option value="London">DAVAO CITY</option>
     
      <!-- Add more options as needed -->
  </select>
  <br><br>
  <label for="destination">Destination:</label>
  <select id="destinationsel" name="destination">
      <option value="Paris">DAVAO CITY</option>
      <option value="Sydney">MALAYBALAY</option>
      <option value="Dubai">QUEZON</option>
      <!-- Add more options as needed -->
  </select>
  <br><br>
  <label for="date">Departure Date:</label>
  <input type="date" id="date" name="date">
  <br><br>
  <div class="radio-group">
      <label class="traintype">Train Type:</label><br>
      <label for="ac">AC</label>
      <input type="radio" id="ac" name="trainType" value="AC">
      <label for="general">General</label>
      <input type="radio" id="general" name="trainType" value="General">
  </div>
  <br>
  <label class="fare">Fare:</label>
  <input type="number" id="fare" name="fare" value="PHP 0.00">
  <br><br>
  <button class="btn btn-outline-success" type="button" onclick="window.location.href='insert.php';">Book Now</button>
</form>
