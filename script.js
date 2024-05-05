document.getElementById('reservationForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
    
    // Get form values
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var date = document.getElementById('date').value;
    var people = document.getElementById('people').value;
    
    // You can process the reservation data here, e.g., send it to a server
    
    // For now, let's just log the data
    console.log('Name:', name);
    console.log('Email:', email);
    console.log('Date:', date);
    console.log('Number of people:', people);
    
    // Optionally, you can display a confirmation message to the user
    alert('Réservation réussie !');
});

