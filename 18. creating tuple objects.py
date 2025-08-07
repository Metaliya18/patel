# 1) Creating an empty tuple
empty_tuple = ()
print("Empty tuple:", empty_tuple)

# 2) Creating a tuple with multiple elements
fruits = ("apple", "banana", "cherry")
print("Tuple with elements:", fruits)

# 3) Creating a tuple without parentheses (tuple packing)
numbers = 1, 2, 3, 4, 5
print("Tuple packing (without parentheses):", numbers)

# 4) Creating a tuple from an iterable using tuple()
letters = tuple("hello")
print("Tuple from string using tuple():", letters)

# 5) Creating a single-element tuple (note the comma)
single_element = (42,)
print("Single-element tuple:", single_element)

# 6) Nested tuple
nested = (1, 2, (3, 4), 5)
print("Nested tuple:", nested)
