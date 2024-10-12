from collections import defaultdict

def find_username(preferred_names):
    used_names = set()
    name_to_index = defaultdict(int)  # Mặc định giá trị ban đầu là 0

    for name in preferred_names:
        if name not in used_names:
            used_names.add(name)
            print(name)
        else:
            index = name_to_index[name]
            while True:
                new_name = name + str(index)
                if new_name not in used_names:
                    used_names.add(new_name)
                    print(new_name)
                    name_to_index[name] = index + 1
                    break
                index += 1

if __name__ == "__main__":
    n = int(input())
    preferred_names = [input().strip() for _ in range(n)]
    find_username(preferred_names)
