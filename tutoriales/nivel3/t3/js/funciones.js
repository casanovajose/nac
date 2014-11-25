/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    
    // todos los input con clase fecha tendran calendario
     $('.fecha').each( function(){
      $('.fecha').datepicker({dateFormat: 'dd/mm/yy'});
     });  
        
});
