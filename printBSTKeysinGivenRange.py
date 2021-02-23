class Node:

	def __init__(self, data):
		self.data = data
		self.left = None
		self.right = None

def Print(root, k1, k2):
	
	if root is None:
		return

	if k1 < root.data :
		Print(root.left, k1, k2)

	if k1 <= root.data and k2 >= root.data:
		print root.data,

	if k2 > root.data:
		Print(root.right, k1, k2)

k1 = 10 ; k2 = 25 ;
root = Node(20)
root.left = Node(8)
root.right = Node(22)
root.left.left = Node(4)
root.left.right = Node(12)

Print(root, k1, k2)

