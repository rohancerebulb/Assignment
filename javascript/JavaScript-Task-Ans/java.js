function sum()
{
    let inputValue = document.getElementById("sum").value; 
    var sum=0;
    for (i = 1; i <= inputValue; i++) 
    {
        sum += i;
    }
    document.getElementById("output").innerText = "Sum is: " + sum;
}