using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace AppCalculoIMC
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void btnCalcular_Click(object sender, EventArgs e)
        {
            double peso, altura, imc;

            peso = double.Parse(edtPeso.Text);
            altura = double.Parse(edtAltura.Text);

            imc = peso/(altura*altura);

            lblIMC.Text = imc.ToString("N2");
        }
    }
}
