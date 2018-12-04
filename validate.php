<script>
function validate()
{
    temp=true;
    if(document.getElementById("txt").value=="")
    {
        temp=false;
        docunemt.getElementById("txt").style="background-color:red";
    }
    else{
        docunemt.getElementById("txt").style="";
        return temp;
    }
}
</script>