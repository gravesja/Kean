import sys

if len(sys.argv) != 5:
    print("Error integers not found")
    sys.exit(1)

try:
    num1 = float(sys.argv[1])
    num2 = float(sys.argv[2])
    name = sys.argv[3]
    date = sys.argv[4]
    result = num1 * num2
    print(f" The sum is {result} ")
    print(f"Name: {name} ")
    print(f"Date: {date} ")
except ValueError:
    print("Error: Intgers not found")
    sys.exit(1)