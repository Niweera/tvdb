function validate(){
         if( document.insert.tvname.value === "" )
         {
            alert( "Please provide TVName!" );
            document.insert.tvname.focus() ;
            return false;
         }
         
         if( document.insert.link.value === "" )
         {
            alert( "Please provide the Link!" );
            document.insert.link.focus() ;
            return false;
         }
         
         if( document.insert.tvfrom.value === "" )
         {
            alert( "Please provide TVFrom!" );
            document.insert.tvfrom.focus() ;
            return false;
         }
         
         if( document.insert.tvto.value === "" )
         {
            alert( "Please provide TVTo!" );
            document.insert.tvto.focus() ;
            return false;
         }             
}

function validate1(){
         if( document.fstoredin.tvid.value === "" )
         {
            alert( "Please provide TVID!" );
            document.fstoredin.tvid.focus() ;
            return false;
         }
         
         if( document.fstoredin.tvfrom.value === "" )
         {
            alert( "Please provide TVFrom!" );
            document.fstoredin.tvfrom.focus() ;
            return false;
         }
         
         if( document.fstoredin.tvto.value === "" )
         {
            alert( "Please provide TVTo!" );
            document.fstoredin.tvto.focus() ;
            return false;
         }      
}

function validate2(){
         if( document.fshowtype.tvid.value === "" )
         {
            alert( "Please provide TVID!" );
            document.fshowtype.tvid.focus() ;
            return false;
         }
}

function validate3(){
         if( document.flink.tvid.value === "" )
         {
            alert( "Please provide TVID!" );
            document.flink.tvid.focus() ;
            return false;
         }
         
         if( document.flink.link.value === "" )
         {
            alert( "Please provide the Link!" );
            document.flink.link.focus() ;
            return false;
         }       
}
