class multarray
{
    public static void main(String[] arg)
    {
        //multidimentional array  3-D
     int marks[][] = {
                        {{10,9,8,7,8},{10,5,9,7,8},{4,3,2,4,5}}
                        {{10,9,8,7,8},{10,5,9,7,8},{4,3,2,4,5}}
                        {{10,9,8,7,8},{10,5,9,7,8},{4,3,2,4,5}}
                        };
     System.out.println(marks[0][2]);
     for(int i=0;i<3;i++) //no:of 2-D array
     {
        for(int j=0;j<3;j++) //rows
        {
            for(int k=0;k=0;k++) //column
            {
                System.out.print(marks[i][j]+"\t");
            }
               
        }
        System.out.println();
     }
    }
}