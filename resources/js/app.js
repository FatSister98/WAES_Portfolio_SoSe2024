import './bootstrap';

document.addEventListener('DOMContentLoaded', function(){
    var className = 'form-control';
    var type = 'text';

    //create.blade onclick

    var examBtn = document.getElementById('examBtn');
    if(examBtn){
        examBtn.addEventListener('click', function(e){

            e.preventDefault()
    
            var examTable = document.getElementById('examTable');
            
            var newRow = document.createElement('tr');
            var newZelleName = document.createElement('td');
            var newZelleErg = document.createElement('td');
            var newZelleCp = document.createElement('td');
            var newInputName = document.createElement('input');
            var newSelectErg = document.createElement('select');
            var selectedOption = document.createElement('option')
            var bestandenOption = document.createElement('option');
            var nichtBestandenOption = document.createElement('option');
            var newInputCp = document.createElement('input');


            newInputName.className = className;
            newInputName.type = type;
            newInputName.name = 'name[]';

            newSelectErg.className = 'form-select';
            newSelectErg.name = 'wertung[]';
            selectedOption.selected = true;
            selectedOption.disabled = true;
            selectedOption.innerText = 'Wertung auswählen';
            bestandenOption.innerText ='bestanden';
            bestandenOption.value = 'bestanden';
            nichtBestandenOption.value = 'nicht bestanden';
            nichtBestandenOption.innerText='nicht bestanden';

            newInputCp.className = className;
            newInputCp.type = type;
            newInputCp.name = 'cp[]';
    
    
            newZelleName.append(newInputName);
            newRow.append(newZelleName);

            newSelectErg.append(selectedOption);
            newSelectErg.append(bestandenOption);
            newSelectErg.append(nichtBestandenOption);
            newZelleErg.append(newSelectErg);
            newRow.append(newZelleErg);

            newZelleCp.append(newInputCp);
            newRow.append(newZelleCp);
            
    
            
            examTable.append(newRow);
    
           
        })

    }
    

    

    

})

