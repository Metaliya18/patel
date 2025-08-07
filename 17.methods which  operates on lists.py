# Sample list
fruits = ['apple', 'banana', 'cherry', 'banana', 'date']

# i) list() - Create a list (from iterable)
letters = list("hello")
print("list():", letters)  # ['h', 'e', 'l', 'l', 'o']

# ii) len() - Length of the list
print("len(fruits):", len(fruits))  # 5

# iii) count() - Count occurrences of an element
print("fruits.count('banana'):", fruits.count('banana'))  # 2

# iv) index() - Find index of first occurrence of an element
print("fruits.index('cherry'):", fruits.index('cherry'))  # 2

# v) append() - Add an element at the end
fruits.append('elderberry')
print("append('elderberry'):", fruits)

# vi) insert() - Insert element at specified index
fruits.insert(1, 'blueberry')
print("insert('blueberry' at index 1):", fruits)

# vii) extend() - Extend list by appending elements from another list
fruits.extend(['fig', 'grape'])
print("extend(['fig', 'grape']):", fruits)

# viii) remove() - Remove first occurrence of an element
fruits.remove('banana')
print("remove('banana'):", fruits)

# ix) pop() - Remove and return element at index (default last)
popped = fruits.pop()
print("pop():", popped)
print("List after pop:", fruits)

# x) reverse() - Reverse the list in place
fruits.reverse()
print("reverse():", fruits)

# xi) sort() - Sort the list in ascending order
fruits.sort()
print("sort():", fruits)

# xii) copy() - Create a shallow copy of the list
fruits_copy = fruits.copy()
print("copy():", fruits_copy)

# xiii) clear() - Remove all elements from the list
fruits.clear()
print("clear():", fruits)
print("List after clear:", fruits)
