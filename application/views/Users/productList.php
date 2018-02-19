<tr>
                     <td><img id="pic" src="images//<?php echo base_url(); $imageproduct ?>" height="90" width="90"/></td>
                      <td id="name"><?php echo $prod_name; ?><br></td>
                      <td id="price">&#8369;<?php echo $price; ?></td>
                       <td id="place"><?php echo $place; ?></td>
	<td id="category"><br><br><?php echo $category; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                     <td id="desc"><p id="ds">DESCRIPTION:</p><?php echo $prod_desc; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td id="stat"><p id="ds">STATUS:</p><?php echo $status; ?></td>
	
	<td>
		<a id ="btn" href='Btrans/?id=<?php echo $prod_id; ?>'>Buy</a> 
        </td><br>
</tr>

<style>
    tr{
        border-style: solid;
        border-width:3px;
        border-color: #000;
    }
    
    #pic{
        border-radius: 10px;
    }
    #name{
        width:180px;
      padding-left:10px;
      position:relative;
      bottom:28px;
      font: 21px "Gill Sans MT",sans-serif;  
    }
    
    #price{
        color:#D35400;  
        font: 15px "Arial",sans-serif; 
        position:relative;
        padding-top: 3px;
        left:-160px;
    }
    
    #place{
        font: 13px "Arial Rounded MT",sans-serif; 
        width:100px;
        position:relative;
        left:-242px;
        bottom:-20px;
    }
    
    #category{
        width:200px;
        font: 13px "Arial Rounded MT",sans-serif; 
        position:relative;
        bottom:-25px;
        left:-335px;
    }
    
    #desc{
        padding-right:40px;
        position:relative;
        left:-200px;
    }
    
    #ds{
                font: 17px "Arial Rounded MT",sans-serif;
        margin-top:-20px;
    }
    
    #stat{
        width:100px;
        position:relative;
        left:-150px;
        bottom:-1px;
    }
    
    #btn{
        padding:10px 20px;
        border-radius: 3px;
        background-color: #85929E;
        position:relative;
        left:-50px;
        text-decoration: none;
        color:white;
   }
   
   #btn:hover{
        background-color: #5D6D7E;
   }
</style>