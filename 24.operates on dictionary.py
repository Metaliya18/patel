# Sample dictionary
student = {
    "name": "John",
    "age": 21,
    "course": "Computer Science"
}

print("Original dictionary:", student)

# i) dict() - Create a new dictionary (copying from another dict here)
new_dict = dict(student)
print("Using dict() to copy:", new_dict)

# ii) len() - Number of key-value pairs
print("len(student):", len(student))

# iii) clear() - Remove all items
temp_dict = student.copy()
temp_dict.clear()
print("After clear():", temp_dict)

# iv) get() - Get value for key, returns None (or default) if key not found
print("student.get('name'):", student.get("name"))
print("student.get('grade'):", student.get("grade"))  # None
print("student.get('grade', 'N/A'):", student.get("grade", "N/A"))  # Default value

# v) pop() - Remove key and return its value
age = student.pop("age")
print("Popped 'age':", age)
print("Dictionary after pop('age'):", student)

# vi) popitem() - Remove and return last inserted key-value pair
last_item = student.popitem()
print("Popped last item:", last_item)
print("Dictionary after popitem():", student)

# Re-adding items for further examples
student["age"] = 21
student["course"] = "Computer Science"

# vii) keys() - Returns a view of keys
print("Keys:", student.keys())

# viii) values() - Returns a view of values
print("Values:", student.values())

# ix) items() - Returns a view of key-value pairs
print("Items:", student.items())

# x) copy() - Returns a shallow copy of the dictionary
copy_dict = student.copy()
print("Copy of dictionary:", copy_dict)

# xi) update() - Update dictionary with another dictionary or iterable of key-value pairs
student.update({"grade": "A", "age": 22})
print("After update():", student)
