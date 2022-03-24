# hourglass-algorithm
Context
Given a 6X6 2D Array, A :<br><br>

1 1 1 0 0 0<br>
0 1 0 0 0 0<br>
1 1 1 0 0 0<br>
0 0 0 0 0 0<br>
0 0 0 0 0 0<br>
0 0 0 0 0 0<br>

<p>We define an hourglass in  to be a subset of values with indices falling in this pattern in 's graphical representation:</p>
a b c<br>
&nbsp; d<br>
e f g<br>
<p>
There are 16 hourglasses in A, and an hourglass sum is the sum of an hourglass' values.<br><br>

Task<br>
Calculate the hourglass sum for every hourglass in A, then print the maximum hourglass sum.<br><br>

Example<br><br>

In the array shown above, the maximum hourglass sum is 7 for the hourglass in the top left corner.<br><br>

Input Format<br><br>

There are  lines of input, where each line contains  space-separated integers that describe the 2D Array A.<br>
  
Constraints<br>
  -9 <= A[i][j] <= 9<br>
  0 <= i,J <= 5<br><br>
  
  Print the maximum hourglass sum in A
  
  


</p>
