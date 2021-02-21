class newNode: 
	def __init__(self, key): 
		self.key = key 
		self.left = self.right = None

def findLargestSubtreeSumUtil(root, ans): 
	
	if (root == None): 
		return 0
	
	currSum = (root.key +
			findLargestSubtreeSumUtil(root.left, ans) +
			findLargestSubtreeSumUtil(root.right, ans)) 

	ans[0] = max(ans[0], currSum) 

	return currSum 

def findLargestSubtreeSum(root): 
	if (root == None):	 
		return 0
	ans = [-999999999999] 

	findLargestSubtreeSumUtil(root, ans) 

	return ans[0] 

if __name__ == '__main__': 
	
	root = newNode(1) 
	root.left = newNode(-2) 
	root.right = newNode(3) 
	root.left.left = newNode(4) 
	root.left.right = newNode(5) 
	root.right.left = newNode(-6) 
	root.right.right = newNode(2) 

	print(findLargestSubtreeSum(root)) 

