"""
Scatter Plot With Tooltips
==========================
A scatter-plot with tooltip labels on hover.  Hover over the points to see
the point labels.
Use the toolbar buttons at the bottom-right of the plot to enable zooming
and panning, and to reset the view.
"""
import matplotlib.pyplot as plt
import numpy as np
import mpld3
import pandas as pd

fig = plt.figure(figsize=(10, 8))
#ax = plt.subplots()
ax = fig.add_subplot(1, 1, 1)


with open('/Users/hyelimpark/HACKA/correctoutput.txt', 'r') as f:
  data = f.read()

pd_data = pd.read_json(data)
pd_data_1 = pd_data.assign(sostenibilidad=lambda x: ((x.loc[:, 'Ecosyst Vitality'] * 0.6) + (x.loc[:, 'Enviro. Health'] * 0.4)) / 100)

# Scatter points
x = np.array(pd_data_1.loc[:, 'sostenibilidad'])
y = (np.array(pd_data_1.loc[:, 'Saved Money']) / max(pd_data_1.loc[:, 'Saved Money']))
color = -1 * (np.array(pd_data_1.loc[:, 'Rain Probability']) / max(pd_data_1.loc[:, 'Rain Probability']))
size = (np.array(pd_data_1.loc[:, 'Score']) - np.mean(pd_data_1.loc[:, 'Score'])) / np.std(pd_data_1.loc[:, 'Score'])

scatter = ax.scatter(x,
                     y,
                     c=color,
                     s=1000 * size,
                     alpha=0.3,
                     cmap=plt.cm.jet)

ax.grid(color='white', linestyle='solid')


labels = ["Xi'an: 38.2%", 'Osaka: 65.3%', 'Hangzhou: 58.4%', 'Singapore: 85.6%', 'Seoul: 54.5%',
          'Frankfurt am Main: 33.3%', 'London: 26.7%', 'Hong Kong: 84.6%', 'Bangkok: 97.0%', 'Shenzhen: 92.1%',
          'Paris: 30.0%', 'Los Angeles: 1.3%', 'Guangzhou: 92.8%', 'Munich: 49.3%', 'New York: 46.0%',
          'Amsterdam: 38.2%', 'Kunming: 80.3%', 'Sydney: 26.7%', 'Toronto: 42.4%', 'Melbourne: 45.7%', 'Tokyo: 47.0%',
          'Xiamen: 60.4%', 'Shanghai: 59.8%', 'Dubai: 0%', 'Chongqing: 59.4%', 'Chengdu: 69.6%',
          'San Francisco: 0.32%']


tooltip = mpld3.plugins.PointLabelTooltip(scatter, labels=labels)
fig1 = mpld3.plugins.connect(fig, tooltip)

mpld3.show()
