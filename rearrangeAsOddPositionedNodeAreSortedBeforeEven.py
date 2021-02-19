class Node: 
	def __init__(self, d): 
		self.data = d 
		self.next = None

class LinkedList: 
	def __init__(self): 
		self.head = None
		
	def newNode(self, key): 
		temp = Node(key) 
		self.next = None
		return temp 

	def rearrangeEvenOdd(self, head): 
		
		if (self.head == None): 
			return None

		odd = self.head 
		even = self.head.next

		evenFirst = even 

		while (1 == 1): 
			
			if (odd == None or even == None or
							(even.next) == None): 
				odd.next = evenFirst 
				break

			odd.next = even.next
			odd = even.next

			if (odd.next == None): 
				even.next = None
				odd.next = evenFirst 
				break

			even.next = odd.next
			even = odd.next
		return head 

	def printlist(self, node): 
		while (node != None): 
			print(node.data, end = "") 
			print("->", end = "") 
			node = node.next
		print ("NULL") 
		
	def push(self, new_data): 
		new_node = Node(new_data) 
		new_node.next = self.head 
		self.head = new_node 

ll = LinkedList() 
ll.push(5) 
ll.push(4) 
ll.push(3) 
ll.push(2) 
ll.push(1) 
print ("Given Linked List") 
ll.printlist(ll.head) 

start = ll.rearrangeEvenOdd(ll.head) 

print ("\nModified Linked List") 
ll.printlist(start) 
