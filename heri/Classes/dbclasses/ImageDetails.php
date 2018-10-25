<?php
include_once("database.inc.php");
class ImageDetails
{
var $imageId;
var $ImageName;
var $ImagePath;
var $ImagePosition;
var $imageDescription;
var $imageuploaddate;
var $category_field;


function ImageDetails()
{
$this->database=new Database();
}
//getter methode

function getimageId()
{
    return $this->imageId;
}
function getImageName()
{
    return $this->ImageName;
}
function getImagePath()
{
    return $this->ImagePath;
}
function getImagePosition()
{
    return $this->ImagePosition;
}

function getimageuploaddate()
{
    return $this->imageuploaddate;
}

function getimageDescription()
{
    return $this->imageDescription;
}


//setter methode
function setimageDescription($val)
{
     $this->imageDescription=$val;
}

function getimagecategory_field()
{
    return $this->category_field;
}


//setter methode
function setimagecategory_field($val)
{
     $this->category_field=$val;
}





//setter methode
function setimageuploaddate($val)
{
     $this->imageuploaddate=$val;
}
function setImagePositione($val)
{
     $this->ImagePosition=$val;
}
function setImagePath($val)
{
     $this->ImagePath=$val;
}

function setImageName($val)
{
     $this->ImageName=$val;
}
function setimageId($val)
{
     $this->imageId=$val;
}




function Insert()
{
    
    $sql="INSERT INTO tbl_images(imagrUrl,imageposition,imageDescription,lastdate,category_field,imageName) VALUES ('$this->ImagePath','$this->ImagePosition','$this->imageDescription','$this->imageuploaddate','$this->category_field','$this->ImageName')";

    echo $sql;
    $result=$this->database->Query($sql);
    return $result; 
   
}

function Update($Id)
{

    $sql="UPDATE  tbl_images SET imagrUrl='$this->ImagePath',imageposition='$this->ImagePosition',imageDescription='$this->imageDescription',lastdate='$this->imageuploaddate',category_field='$this->category_field',imageName='$this->ImageName'  WHERE imageId='$Id'";
    echo $sql;
    $result=$this->database->Query($sql);
    return $result; 
}



function SelectAllProduct()
{
    // SELECT * FROM images ORDER BY uploaded_on DESC
    $sql="SELECT * FROM tbl_images ORDER BY imageposition DESC";
    $result=$this->database->db_selectData($sql);
    return $result;
}
function SelectOneProduct()
{
    // SELECT * FROM images ORDER BY uploaded_on DESC
    $sql="SELECT * FROM tbl_images WHERE category_field='1' ORDER BY imageposition DESC";
    $result=$this->database->db_selectData($sql);
    return $result;
}


function SelectTwoProduct()
{
    // SELECT * FROM images ORDER BY uploaded_on DESC
    $sql="SELECT * FROM tbl_images WHERE category_field='2' ORDER BY imageposition DESC";
    $result=$this->database->db_selectData($sql);
    return $result;
}
function SelectAllProductAsc()
{
    // SELECT * FROM images ORDER BY uploaded_on DESC
    $sql="SELECT * FROM tbl_images ORDER BY imageposition ASC";
    $result=$this->database->db_selectData($sql);
    return $result;
}





function DeleteImage($Id)
{
    $sql="DELETE  FROM tbl_images  WHERE  imageId='$Id'";
    $result=$this->database->Query($sql);
    return $result;
}


function SelectImageDetailsById($Id)
{
    // SELECT * FROM images ORDER BY uploaded_on DESC
    $sql="SELECT * FROM tbl_images WHERE imageId='$Id'";
    $result=$this->database->db_selectData($sql);
    return $result;
}




function getRows(){
        $query = $this->database->Query("SELECT * FROM tbl_images ORDER BY imageposition ASC");
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $result[] = $row;
            }
        }else{
            $result = FALSE;
        }
        return $result;
    }
    
    /*
     * Update image order
     */
    function updateOrder($id_array){

        $count = 1;
        foreach ($id_array as $id){
            $update = $this->database->Query("UPDATE tbl_images SET imageposition = $count WHERE imageId = $id");
            $count ++;  
   
        }
        return TRUE;
    }





function Delete($Id)
{
    $sql="DELETE  FROM tbl_products  WHERE  ItemId='$Id'";
    $result=$this->database->Query($sql);
    $sql="DELETE  FROM tbl_images  WHERE  ItemId='$Id'";
    $result=$this->database->Query($sql);
    return $result;
}

function SelectProductDetailsById($Id)
{
    $sql="SELECT * FROM tbl_products where ItemId='$Id'";
    $result=$this->database->db_selectData($sql);
    return $result;
}
function SelectProductDetails($OprMode)
{

    $sql="SELECT * FROM tbl_products  where  SellingFlag='$OprMode'";
    $result=$this->database->db_selectData($sql);
   
    return $result;
}
function SelectProductDetailsByCashRange($param,$itemId)
{
    $max=((int)($param)*20/100)+$param;
    $min=((int)($param)*(-20/100))+$param;
    $sql="SELECT * FROM tbl_products  where  SellingPrice<='$max' and SellingPrice>='$min' and ItemId!='$itemId'";
    $result=$this->database->db_selectData($sql);
   
    return $result;
}



function SelectAllProductbyFilter($filter)
{
    $sql="";
    if($filter=="ALL")
    {
    $sql="SELECT * FROM tbl_products";
    }
    else if($filter=="AZ")
    {
    $sql="SELECT * FROM tbl_products ORDER BY ItemName asc";
   
    }
    else if($filter=="ZA")
    {
    $sql="SELECT * FROM tbl_products ORDER BY ItemName desc";
   
    }
    else if($filter=="LH")
    {
    $sql="SELECT * FROM tbl_products ORDER BY SellingPrice asc";
   
    }
    else if($filter=="HL")
    {
    $sql="SELECT * FROM tbl_products ORDER BY SellingPrice desc";
   
    }    

    $result=$this->database->db_selectData($sql);
    return $result;
}



function InsertImage()
{
    
    $sqlImage="INSERT INTO tbl_images(ItemId,ImageUrl) VALUES ('$this->ItemIdval','$this->Image1')";
    $result=$this->database->Query($sqlImage);  
    return $result; 
   
}
function SelectDrpBind()
{
    
    $sql="SELECT ItemCode,ItemId FROM tbl_products ORDER BY SellingPrice desc";
    $result=$this->database->db_selectData($sql);
    return $result;
}
function SelectImageDetailsByIdRowCount($itemId)
{
    $sql="SELECT * FROM tbl_images where ItemId='$itemId'";
    $result=$this->database->db_countRows($sql);
    return $result;
}

}
?>