# 1) Creating an empty set
empty_set = set()
print("Empty set:", empty_set)

# 2) Creating a set with elements using curly braces
fruits = {"apple", "banana", "cherry"}
print("Set with elements:", fruits)

# 3) Creating a set from a list using set()
numbers_list = [1, 2, 2, 3, 4, 4, 5]
numbers_set = set(numbers_list)
print("Set from list (duplicates removed):", numbers_set)

# 4) Creating a set from a string
letters_set = set("hello")
print("Set from string:", letters_set)

# 5) Creating a set from a tuple
numbers_tuple = (10, 20, 30, 20)
tuple_set = set(numbers_tuple)
print("Set from tuple:", tuple_set)

# 6) Using set comprehension
squares = {x**2 for x in range(6)}
print("Set created with set comprehension:", squares)
