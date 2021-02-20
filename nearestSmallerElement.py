def printPrevSmaller(arr, n): 

	print("_, ", end="") 

	for i in range(1, n ): 
	
		for j in range(i-1 ,-2 ,-1): 
		
			if (arr[j] < arr[i]): 
			
				print(arr[j] ,", ", 
							end="") 
				break

		if (j == -1): 
			print("_, ", end="") 

arr = [1, 3, 0, 2, 5] 
n = len(arr) 
printPrevSmaller(arr, n) 
