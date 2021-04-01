import data1 

def getTeams(list):

  teamsList = []
  
  for p in range(len(list)):
    item = list[p]
    if item.is_team:
      teamsList.append(item)
      pass
  return teamsList
  

def exercise1(person, people):
  teams = []
  teamList = getTeams(people)
  for index in range(len(teamList)):
    personName = person.displayname
    membersList = teamList[index].members
    for j in range(len(membersList)):
      print(membersList[j].__dict__)
      if membersList[j].displayname == personName:
        teams.append(teamList[index])
      
      
  return teams

print([t.displayname for t in exercise1(data1.alice, data1.people)])
