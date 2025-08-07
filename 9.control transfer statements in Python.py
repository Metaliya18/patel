# i) break statement example
print("Example of break statement:")
for num in range(1, 10):
    if num == 5:
        print("Breaking the loop at number 5")
        break
    print(num)
print()  # blank line

# ii) continue statement example
print("Example of continue statement:")
for num in range(1, 6):
    if num == 3:
        print("Skipping number 3")
        continue
    print(num)
print()  # blank line

# iii) pass statement example
print("Example of pass statement:")
for num in range(1, 4):
    if num == 2:
        pass  # placeholder, does nothing
    print(num)
