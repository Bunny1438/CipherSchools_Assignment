
INT_MIN = -2**32


class Node:
	def __init__(self, data):
		self.data = data
		self.left = None
		self.right = None


def maxPathSumUtil(root, res):

	if root is None:
		return 0

	ls = maxPathSumUtil(root.left, res)
	rs = maxPathSumUtil(root.right, res)

	if root.left is not None and root.right is not None:

		res[0] = max(res[0], ls + rs + root.data)

		return max(ls, rs) + root.data

	if root.left is None:
		return rs + root.data
	else:
		return ls + root.data



def maxPathSum(root):
	res = [INT_MIN]
	maxPathSumUtil(root, res)
	return res[0]


root = Node(-15)
root.left = Node(5)
root.right = Node(6)
root.left.left = Node(-8)
root.left.right = Node(1)
root.left.left.left = Node(2)
root.left.left.right = Node(6)
root.right.left = Node(3)
root.right.right = Node(9)
root.right.right.right = Node(0)
root.right.right.right.left = Node(4)
root.right.right.right.right = Node(-1)
root.right.right.right.right.left = Node(10)

print "Max pathSum of the given binary tree is", maxPathSum(root)

