      $(function() {
        $('#action').click(function() {
			mat = document.getElementById('matricule').value;
          $.ajax({
            type: 'GET',
            url: '../metier/connexion.php?mat='+mat,
            success: function(data) {
				var d = data.split(',')
              document.getElementById('nom').value=d[0];
			  document.getElementById('prenom').value=d[1];
			  document.getElementById('E-mail').value=d[2];
			  
			  },
            error: function() {
              alert('La requête n\'a pas abouti'); }
          });    
        });  
		
		$('#categorie').change(function() {
			cat = document.getElementById('categorie').value;
            $.ajax({
            type: 'GET',
            url: '../metier/connexion.php?cat='+cat,
            success: function(data) {
				var select = document.getElementById("Type_de_materiel");
				$("#Type_de_materiel").empty();
				var ds = data.split('/');
				var i;
				for(i=0;i<ds.length;i++){
					var d = ds[i].split(',')
					select.options[select.options.length] = new Option(d[1] ,d[0]);
				}
			  
			  },
            error: function() {
              alert('La requête n\'a pas abouti'); }
          });    
        }); 
		
		 $('#Type_de_materiel').change(function() {
			num = document.getElementById('Type_de_materiel').value;
			document.getElementById('num_serie').value= num;
            
        }); 
      });
	  
	 
      