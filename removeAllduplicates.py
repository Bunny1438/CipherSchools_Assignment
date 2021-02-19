 
class Node: 
	def __init__(self, val): 
		self.val = val 
		self.next = None
class LinkedList: 
	def __init__(self): 
		self.head = None
		
	def push(self, new_data): 
		new_node = Node(new_data) 
		new_node.next = self.head 
		self.head = new_node 
		return new_node 
		
	def removeAllDuplicates(self, temp): 
		
		curr = temp 
		head = prev = Node(None) 
		head.next = curr 

		while curr and curr.next: 
			
			if curr.val == curr.next.val: 
				while(curr and curr.next and
					curr.val == curr.next.val): 
					curr = curr.next
					
			 
				curr = curr.next
				prev.next = curr 
			else: 
				prev = prev.next
				curr = curr.next
		return head.next
		
	def printList(self): 
		temp1 = self.head 
		while temp1 is not None: 
			print(temp1.val, end = " ") 
			temp1 = temp1.next
			
	def get_head(self): 
		return self.head 

if __name__=='__main__': 
	llist = LinkedList() 
	llist.push(53) 
	llist.push(53) 
	llist.push(49) 
	llist.push(49) 
	llist.push(35) 
	llist.push(28) 
	llist.push(28) 
	llist.push(23) 
	
	print('Created linked list is:') 
	llist.printList() 
	print('\nLinked list after deletion of duplicates:') 
	head1 = llist.get_head() 
	llist.removeAllDuplicates(head1) 
	llist.printList() 
		
